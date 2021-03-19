<!DOCTYPE html>

<head>
    <title> PHP OO 5 - Métodos internos </title>
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
        public $cargo = null;
        public $salario = null;


        # Sobrecarga dos Getters and Setters

        function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        function __get($atributo)
        {
            return $this->$atributo;
        }

        # Métodos

        function resumirCadFunc()
        {
            return $this->__get('nome') .  " possui " . $this->__get('numFilhos') . " filho(s)";
        }

        function modificarNumFilhos($numFilhos)
        {
            echo 'Alteração feita com sucesso';
            $this->numFilhos = $numFilhos;
        }
    }

    $var = new Funcionarios();
    $var->__set('nome', 'Jorge Neiva');
    $var->__set('telefone', '71 986207569');
    $var->__set('numFilhos', 3);
    $var->__set('cargo', 'Analista de Requisitos');
    $var->__set('salario', 2200);

    echo $var->__get('nome') . '<br>';
    echo $var->__get('telefone') . '<br>';
    echo $var->__get('numFilhos') . '<br>';
    echo $var->__get('cargo') . '<br>';
    echo $var->__get('salario') . '<br>';

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
    $var2->__set('nome', 'Maria Treubeuchê');
    $var2->__set('telefone', '71 999897888');
    $var2->__set('numFilhos', 1);
    $var2->__set('cargo', 'CTO');
    $var2->__set('salario', 5000);

    echo $var2->__get('nome') . '<br>';
    echo $var2->__get('telefone') . '<br>';
    echo $var2->__get('numFilhos') . '<br>';
    echo $var2->__get('cargo') . '<br>';
    echo $var2->__get('salario') . '<br>';

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