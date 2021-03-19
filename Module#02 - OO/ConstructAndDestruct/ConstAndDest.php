<!DOCTYPE html>

<head>
    <title> PHP OO 6 - Construtor e Destrutor </title>
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
    class Pessoa
    {

        public $nome = null;

        function __construct($nome)
        {
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }

        function __destruct()
        {
            echo 'Objeto removido';
        }

        function __get($atributo)
        {
            return $this->$atributo;
        }

        function correr()
        {
            return $this->__get('nome') . ' está correndo!';
        }
    }

    $var = new Pessoa('Sônia Arantos');
    echo '<br>';
    echo 'Nome: ' .  $var->__get('nome');

    echo '<br>';

    echo $var->correr();
    echo '<br>';

    unset($var);

    ?>

</body>

<html>