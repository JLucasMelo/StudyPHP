<!DOCTYPE html>

<head>
    <title> PHP Basics 7 - Arrays </title>
    <meta charset="utf-8">

    <style>
        body {
            font-family: "Helvetica", "Trebuchet MS", sans-serif;
            background-color: beige;
        }
    </style>
</head>

<body>
    <h2>Array basico</h2>
    <p>
        <?php
        $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
        # $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva']; // Outra forma de declaração

        $lista_frutas[] = 'Abacaxi';
        $lista_frutas[] = 'Abacate';

        echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';
        echo '<br>';
        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

        echo 'A terceira fruta do array é ' . $lista_frutas[2];
        ?>
    </p>

    <hr>

    <h2> Array assotiativo </h2>

    <p>
        <?php
        $lista_frutas2 = array(
            'a' => 'Banana',
            'b' => 'Maçã',
            'c' => 'Morango',
            'd' => 'Uva'
        );

        $lista_frutas2['e'] = 'Abacaxi';
        $lista_frutas2['f'] = 'Abacate';

        echo '<pre>';
        var_dump($lista_frutas2);
        echo '</pre>';
        echo '<br>';
        echo '<pre>';
        print_r($lista_frutas2);
        echo '</pre>';

        ?>
    </p>

    <hr>

    <h2> Arrays Multidimensionais </h2>

    <p>
        <?php
        $lista_coisas = array();

        $lista_coisas['frutas'] = array(
            1 => 'Banana',
            2 => 'Maçã',
            3 => 'Morango',
            4 => 'Uva'
        );

        $lista_coisas['Membros'] = array(
            1 => 'Jorge Konnigsreutter',
            2 => 'Maria Eunícia',
            3 => 'Carlos Vasconcelos'
        );

        echo '<pre>';
        var_dump($lista_coisas);
        echo '</pre>';
        echo '<br>';
        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo '<br>';
        echo $lista_coisas['Membros'][2] . ' Gostaria de comprar um ' . $lista_coisas['frutas'][3];

        ?>
    </p>

    <hr>

    <h2> Métodos de Pesquisa </h2>

    <p>
        <?php

        $lista = array('Banana', 'Maçã', 'Morango', 'Uva', 'Batata', 'Cenoura');

        echo '<pre>';
        var_dump($lista);
        echo '</pre>';
        echo '<br>';
        echo '<pre>';
        print_r($lista);
        echo '</pre>';

        $nome = 'Morango';

        if (in_array($nome, $lista) == true) {
            echo  'O item ' . $nome . ' está na lista';
            echo ' e está na posição de número ' . array_search($nome, $lista);
        } else {
            echo  'O item ' . $nome . ' não está na lista';
        }

        /*
        Para pesquisar em arrays multidimensionais 

        $lista_coisas = array();

        $lista_coisas['frutas'] = array(
            1 => 'Banana',
            2 => 'Maçã',
            3 => 'Morango',
            4 => 'Uva'
        );

        $lista_coisas['Membros'] = array(
            1 => 'Jorge Konnigsreutter',
            2 => 'Maria Eunícia',
            3 => 'Carlos Vasconcelos'
        );

        in_array('Maçã',$lista_coisas['frutas'])
        */

        ?>
    </p>

</body>

<html>