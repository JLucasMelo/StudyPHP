<?php

class Application_Model_Pessoa
{

    protected $pessoa_id;
    protected $nome_completo;
    protected $pessoa_cpf;
    protected $pessoa_idade;


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

    public function setId($pessoa_id)
    {
        $this->pessoa_id = $pessoa_id;
        return $this;
    }

    public function getId()
    {
        return $this->pessoa_id;
    }

    public function setNome($nome_completo)
    {
        $this->nome_completo = $nome_completo;
        return $this;
    }

    public function getNome()
    {
        return $this->nome_completo;
    }

    public function setCPF($pessoa_cpf)
    {
        $this->CPF = $pessoa_cpf;
        return $this;
    }

    public function getCPF()
    {
        return $this->CPF;
    }

    public function setIdade($pessoa_idade)
    {
        $this->idade = $pessoa_idade;
        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }
}
