<?php

class Application_Model_Telefone
{

    protected $telefone_id;
    protected $telefone_pessoa;
    protected $pessoa_id;

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

    public function setId($telefone_id)
    {
        $this->telefone_id = $telefone_id;
        return $this;
    }

    public function getId()
    {
        return $this->telefone_id;
    }

    public function setTelefone($telefone_pessoa)
    {
        $this->telefone_pessoa = $telefone_pessoa;
        return $this;
    }
    public function getTelefone()
    {
        return $this->telefone_pessoa;
    }

    public function setIdPessoa($pessoa_id)
    {
        $this->pessoa_id = $pessoa_id;
        return $this;
    }

    public function getIdPessoa()
    {
        return $this->pessoa_id;
    }
}

