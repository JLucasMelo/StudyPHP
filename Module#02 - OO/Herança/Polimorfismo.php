<!DOCTYPE html>

<head>
    <title> PHP OO 8 - Polimorfismo </title>
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

    class Carro extends Veiculo
    {
        public $tetoSolar = true;

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar()
        {
            echo 'Abrindo teto solar!';
        }

        function aterarPosicaoVolante()
        {
            echo 'Alterando posição do volante';
        }
    }

    class Moto extends Veiculo
    {
        public $contraPesoGuidao = true;

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar()
        {
            echo 'Empinar!';
        }

        function trocarMarcha()
        {
            echo 'Desengatar embreagem com a mão e engatar a marcha com o pé';
        }
    }

    class Veiculo
    {
        public $placa = null;
        public $cor = null;

        function acelerar()
        {
            echo 'Acelerar!';
        }

        function freiar()
        {
            echo 'Freiar!';
        }

        function trocarMarcha()
        {
            echo 'Desengatar embreagem com o pé e engatar a marcha com a mão';
        }
    }

    $carro = new Carro('ABC1234', 'Azul');
    $moto = new Moto('LET1337', 'Preta');

    $carro->trocarMarcha();
    echo '<br>';
    $moto->trocarMarcha();

    ?>

</body>

<html>