<!DOCTYPE html>
<head>
    <title> PHP Basics 4 - Commentaries and Variables </title>
    <meta charset="utf-8">

    <style>
    body {
        font-family: "Helvetica", "Trebuchet MS", sans-serif;
    }
    </style>
</head>
<body>
    <?php
        # Isso é um comnetário
        // Isso também é um comnetãrio
        /*
        Isso daqui
        São algumas linhas
        De comentários
        */

        define('BD_ID', '01');

        //String
        $nome = 'Cláudio Silva';

        //int
        $idade = 34;

        //float
        $peso = 87.36;

        //Boolean
        $fumante_sn = true; # (true = 1) e (false = vazio)

        //Alterando valor de variáveis

        $idade = '30'; # Apesar de diferentes tipos de variáveis, possuirá o mesmo resultado, devido a ser uma liguagem de tipagem fraca

        $peso = 109.65;

    ?>

    <h2> Ficha Cadastral </h2>
    <p>
    Id: <? echo BD_ID?> <br>
    Nome: <?= $nome ?> <br>
    Idade: <?= $idade . ' anos' ?> <br>
    Peso: <?= $peso . ' kilos' ?> <br>
    Fumante: <?= $fumante_sn ?> <hr>
    </p>

    <p>
    <?= 'Olá, ' . $nome .' podemos notar que pela sua idade de ' . $idade .' anos, e por estar com ' . $peso . ' kilos, poderia estar interessado em entrar em uma academia para se exercitar' ?>
    </p>

    <hr>

    <p>
        <? echo "Vai ficar tudo bem $nome!"?>
    </p>
</body>

<html>