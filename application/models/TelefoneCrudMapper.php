<?php

class Application_Model_TelefoneCrudMapper
{
    protected $_dbTable;

    public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }

        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('gateway de dados de tabela inválido fornecido');
        }

        $this->_dbTable = $dbTable;
        return $this;
    }

    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_crudTable');
        }

        return $this->_dbTable;
    }

    public function save(Application_Model_Telefone $telefone)
    {
        $data = array(
            'id' => $telefone->getId(),
            'telefone' => $telefone->getTelefone(),
            'id_pessoa' => $telefone->getIdPessoa(),
        );

        if (null === ($id = $telefone->getId())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    }

    public function find($id, Application_Model_Telefone $telefone)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }

        $row = $result->current();
        $telefone->setId($row->telefone_id)
            ->setTelefone($row->telefone_pessoa)
            ->setIdPessoa($row->pessoa_id);
    }

    public function fetchall()
    {
        $resultSet = $this->getDbTable()->fetchall();
        $entries = array();

        foreach($resultSet as $row) {
            $entry = new Application_Model_Telefone;
            $entry->setId($row->telefone_id)
            ->setTelefone($row->telefone_pessoa)
            ->setIdPessoa($row->pessoa_id);

            $entries[] = $entry;
        }
        return $entries;
    }
}
