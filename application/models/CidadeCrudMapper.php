<?php

class Application_Model_CidadeCrudMapper
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

    public function save(Application_Model_Cidade $cidade)
    {
        $data = array(
            'id' => $cidade->getId(),
            'cidade' => $cidade->getCidade(),
            'estado_id' => $cidade->getIdEstado()
        );

        if (null === ($id = $cidade->getId())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    }

    public function find($id, Application_Model_Cidade $cidade)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }

        $row = $result->current();
        $cidade->setId($row->cidade_id)
            ->setCidade($row->cidade)
            ->setIdEstado($row->estado_id);
    }

    public function fetchall()
    {
        $resultSet = $this->getDbTable()->fetchall();
        $entries = array();

        foreach($resultSet as $row) {
            $entry = new Application_Model_Cidade;
            $entry->setId($row->cidade_id)
            ->setCidade($row->cidade)
            ->setIdEstado($row->estado_id);

            $entries[] = $entry;
        }
        return $entries;
    }
}
