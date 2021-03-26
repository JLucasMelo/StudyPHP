<?php

class Application_Model_PessoaCrudMapper
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

    public function save(Application_Model_Pessoa $pessoa)
    {
        $data = array(
            'id' => $pessoa->getId(),
            'nome completo' => $pessoa->getNome(),
            'CPF' => $pessoa->getCPF(),
            'Idade' => $pessoa->getIdade()
        );

        if (null === ($id = $pessoa->getId())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    }

    public function find($id, Application_Model_Pessoa $pessoa)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }

        $row = $result->current();
        $pessoa->setId($row->pessoa_id)
            ->setNome($row->nome_completo)
            ->setCPF($row->pessoa_cpf)
            ->setIdade($row->idade);
    }

    public function fetchall()
    {
        $resultSet = $this->getDbTable()->fetchall();
        $entries = array();

        foreach($resultSet as $row) {
            $entry = new Application_Model_Pessoa;
            $entry->setId($row->pessoa_id)
            ->setNome($row->nome_completo)
            ->setCPF($row->pessoa_cpf)
            ->setIdade($row->idade);

            $entries[] = $entry;
        }
        return $entries;
    }
}
