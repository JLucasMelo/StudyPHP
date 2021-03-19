<!DOCTYPE html>

<head>
    <title> PHP OO 1 - Basics of OO </title>
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

    class Calculadora
    {

        public $a = 10;
        public $b = 20;

        public $operacao = 'soma';

        public function calcular()
        {
            if ($this->operacao == 'soma') {
                return $this->a + $this->b;
            }
            return false;
        }
    }

    $calcular = new Calculadora();
    echo $calcular->calcular();

    ?>

</body>

<html>