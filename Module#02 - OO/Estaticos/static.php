<!DOCTYPE html>

<head>
    <title> PHP OO 10 - Atributos e métodos estáticos </title>
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

        class Exemplo {
            public static $atributo1 = 'Eu sou um atributo estático';
            public $atributo2 = 'Eu sou um atributo normal';

            public static function metodo1() {
                echo 'Eu sou um método estático';
            }

            public function metodo2() {
                echo 'Eu sou um método normal';
            }
        }

        echo Exemplo::$atributo1;
        echo '<br>';
        Exemplo::metodo1();

    ?>

</body>

<html>