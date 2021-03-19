<!DOCTYPE html>

<head>
    <title> PHP OO 2 - Abstraction </title>
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

        public $nome = 'Jorge Neiva';
        public $telefone = '71 98620-7569';
        public $numFilhos = '3';

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
    echo $var->resumirCadFunc();

    echo '<br>';
    echo '<hr>';

    echo $var->modificarNumFilhos(4);

    echo '<br>';
    echo '<hr>';

    echo $var->resumirCadFunc();

    ?>

</body>

<html>