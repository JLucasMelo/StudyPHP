<!DOCTYPE html>

<head>
    <title> PHP OO 11 - Interfaces </title>
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

    interface EquipametoEletronicoInterface
    {
        public function ligar();
        public function desligar();

        # classes que implementam a interface devem obrigatoriamente conter esses métodos.
    }

    class Geladeira implements EquipametoEletronicoInterface
    {

        public function ligar()
        {
            echo 'Ligar';
        }
        public function desligar()
        {
            echo 'Desligar';
        }

        public function abrirPorta()
        {
            echo 'Abrir Porta';
        }
    }

    class TV implements equipametoEletronicoInterface
    {
        public function ligar()
        {
            echo 'Ligar';
        }
        public function desligar()
        {
            echo 'Desligar';
        }

        public function trocarCanal()
        {
            echo 'Trocar de canal';
        }
    }


    ?>

</body>

<html>