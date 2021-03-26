<?php

class Application_Model_EstadoCrudMapper
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

    public function save(Application_Model_Estado $estado)
    {
        $data = array(
            'id' => $estado->getId(),
            'estado' => $estado->getEstado()
        );

        if (null === ($id = $estado->getId())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    }

    public function find($id, Application_Model_Estado $estado)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }

        $row = $result->current();
        $estado->setId($row->estado_id)
            ->setEstado($row->estado);
    }

    public function fetchall()
    {
        $resultSet = $this->getDbTable()->fetchall();
        $entries = array();

        foreach($resultSet as $row) {
            $entry = new Application_Model_Estado;
            $entry->setId($row->estado_id)
            ->setEstado($row->estado);

            $entries[] = $entry;
        }
        return $entries;
    }
}
