<?php

class Application_Model_EmailCrudMapper
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

    public function save(Application_Model_Email $email)
    {
        $data = array(
            'id' => $email->getId(),
            'email' => $email->getEmail(),
            'id_pessoa' => $email->getIdPessoa(),
        );

        if (null === ($id = $email->getId())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    }

    public function find($id, Application_Model_Email $email)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }

        $row = $result->current();
        $email->setId($row->pessoa_id)
            ->setEmail($row->nome_completo)
            ->setIdPessoa($row->pessoa_cpf);
    }

    public function fetchall()
    {
        $resultSet = $this->getDbTable()->fetchall();
        $entries = array();

        foreach($resultSet as $row) {
            $entry = new Application_Model_Email;
            $entry->setId($row->email_id)
            ->setEmail($row->email_pessoa)
            ->setIdPessoa($row->pessoa_id);

            $entries[] = $entry;
        }
        return $entries;
    }
}
