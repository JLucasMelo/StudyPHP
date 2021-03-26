<?php

class Application_Model_EnderecoCrudMapper
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

    public function save(Application_Model_Endereco $endereco)
    {
        $data = array(
            'id' => $endereco->getId(),
            'logradouro' =>$endereco->getLogradouro(),
            'CEP' =>$endereco->getCEP(),
            'numero' =>$endereco->getNumero(),
            'bairro' =>$endereco->getBairro(),
            'cidade_id' =>$endereco->getIdCidade(),
            'estado_id' =>$endereco->getIdEstado(),
            'pessoa_id' =>$endereco->getIdPessoa()
        );

        if (null === ($id =$endereco->getId())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    }

    public function find($id, Application_Model_Endereco $endereco)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }

        $row = $result->current();
        $endereco->setId($row->endereco_id)
            ->setLogradouro($row->logradouro)
            ->setCEP($row->CEP)
            ->setNumero($row->numero)
            ->setBairro($row->bairro)
            ->setIdCidade($row->cidade_id)
            ->setIdEstado($row->estado_id)
            ->setIdPessoa($row->pessoa_id);
    }

    public function fetchall()
    {
        $resultSet = $this->getDbTable()->fetchall();
        $entries = array();

        foreach($resultSet as $row) {
            $entry = new Application_Model_Pessoa;
            $entry->setId($row->endereco_id)
            ->setLogradouro($row->logradouro)
            ->setCEP($row->CEP)
            ->setNumero($row->numero)
            ->setBairro($row->bairro)
            ->setIdCidade($row->cidade_id)
            ->setIdEstado($row->estado_id)
            ->setIdPessoa($row->pessoa_id);

            $entries[] = $entry;
        }
        return $entries;
    }
}
