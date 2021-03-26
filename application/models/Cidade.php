<?php

class Application_Model_Cidade
{

    protected $cidade_id;
    protected $cidade;
    protected $estado_id;

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

    public function setId($cidade_id)
    {
        $this->cidade_id = $cidade_id;
        return $this;
    }

    public function getId()
    {
        return $this->cidade_id;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setIdEstado($estado_id)
    {
        $this->estado_id = $estado_id;
        return $this;
    }

    public function getIdEstado()
    {
        return $this->estado_id;
    }
}

