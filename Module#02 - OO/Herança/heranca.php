<!DOCTYPE html>

<head>
    <title> PHP OO 7 - Herança </title>
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
    }

    class Veiculo
    {
        public $placa = null;
        public $cor = null;

        function acelerar()
        {
            echo 'Acelerar!';
        }
    }

    $carro = new Carro('ABC1234', 'Azul');
    $moto = new Moto('LET1337', 'Preta');

    echo '<pre>';
    print_r($carro);
    echo '</pre>';

    echo '<br>';
    echo '<hr>';

    echo '<pre>';
    print_r($moto);
    echo '</pre>';

    echo '<hr>';
    echo '<br>';

    $carro->abrirTetoSolar();
    echo '</br>';
    $carro->acelerar();

    echo '<hr>';

    $moto->empinar();
    echo '</br>';
    $moto->acelerar();

    ?>

</body>

<html>