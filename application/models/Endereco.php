<?php

class Application_Model_Endereco
{

    protected $endereco_id;
    protected $logradouro;
    protected $CEP;
    protected $numero;
    protected $bairro;

    protected $cidade_id;
    protected $estado_id;
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
    public function setId($endereco_id)
    {
        $this->endereco_id = $endereco_id;
        return $this;
    }
    public function getId()
    {
        return $this->endereco_id;
    }

    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
        return $this;
    }
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function setCEP($CEP)
    {
        $this->CEP = $CEP;
        return $this;
    }
    public function getCEP()
    {
        return $this->CEP;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }
    public function getNumero()
    {
        return $this->CEP;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }
    public function getBairro()
    {
        return $this->bairro;
    }



    public function setIdCidade($cidade_id)
    {
        $this->cidade_id = $cidade_id;
        return $this;
    }
    public function getIdCidade()
    {
        return $this->cidade_id;
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
