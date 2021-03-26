<?php

class Application_Model_Estado
{

    protected $estado_id;
    protected $estado;

    public function __set($name, $value)
    {
        $method = 'set' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Propriedade de pessoa inválida!');
        }
        $this->$method($value);
    }
    public function __get($name)
    {
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Propriedade de pessoa inválida');
        }
        return $this->$method();
    }

    public function setId($estado_id)
    {
        $this->estado_id = $estado_id;
        return $this;
    }
    public function getId()
    {
        return $this->estado_id;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }
    public function getEstado()
    {
        return $this->estado;
    }
}
