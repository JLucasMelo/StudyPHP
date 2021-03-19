<!DOCTYPE html>

<head>
    <title> PHP OO 3 - Getters and Setters </title>
    <meta charset="utf-8">

    <style>
        body {
            font-family: "Helvetica", "Trebuchet MS", sans-serif;
            background-color: beige;
        }
    </style>
</head>

<body>
    <?php
    class Funcionarios
    {
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        # Setters

        function setNome($nome)
        {
            $this->nome = $nome;
        }
        function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }
        function setNumFilhos($numFilhos)
        {
            $this->numFilhos = $numFilhos;
        }

        # Getters

        function getNome()
        {
            return $this->nome;
        }
        function getTelefone()
        {
            return $this->telefone;
        }
        function getNumFilhos()
        {
            return $this->numFilhos;
        }

        # Métodos

        function resumirCadFunc()
        {
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($numFilhos)
        {
            echo 'Alteração feita com sucesso';
            $this->numFilhos = $numFilhos;
        }
    }

    $var = new Funcionarios();
    $var->setNome('Jorge Neiva');
    $var->setTelefone('71 986207569');
    $var->setNumFilhos(3);

    echo $var->getNome() . '<br>';
    echo $var->getTelefone() . '<br>';
    echo $var->getNumFilhos();

    echo '<br>';
    echo '<hr>';

    echo $var->resumirCadFunc();

    echo '<br>';
    echo '<hr>';

    echo $var->modificarNumFilhos(4);

    echo '<br>';
    echo '<hr>';

    echo $var->resumirCadFunc();

    echo '<br>';
    echo '<hr>';

    $var2 = new Funcionarios();
    $var2->setNome('Marina Treubeuchê');
    $var2->setTelefone('71 99988-7878');
    $var2->setNumFilhos(1);

    echo $var2->getNome() . '<br>';
    echo $var2->getTelefone() . '<br>';
    echo $var2->getNumFilhos();

    echo '<br>';
    echo '<hr>';

    echo $var2->resumirCadFunc();

    echo '<br>';
    echo '<hr>';

    echo $var2->modificarNumFilhos(2);

    echo '<br>';
    echo '<hr>';

    echo $var2->resumirCadFunc();

    ?>



</body>

<html>