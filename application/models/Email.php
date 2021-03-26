<?php

class Application_Model_Email
{
    protected $email_id;
    protected $email_pessoa;
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
    public function setId($email_id)
    {
        $this->email_id = $email_id;
        return $this;
    }
    public function getId()
    {
        return $this->email_id;
    }

    public function setEmail($email_pessoa)
    {
        $this->email_pessoa = $email_pessoa;
        return $this;
    }
    public function getEmail()
    {
        return $this->email_pessoa;
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