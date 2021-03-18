<!DOCTYPE html>

<head>
    <title> PHP Basics 8 - Loop </title>
    <meta charset="utf-8">

    <style>
        body {
            font-family: "Helvetica", "Trebuchet MS", sans-serif;
            background-color: beige;
        }
    </style>
</head>

<body>
    <h2> Loop While </h2>
    <p>
        <?php
        $num = 1;

        while ($num < 100) {

            $num++;

            if ($num % 2 == 0) {
                echo 'Número par! <br>';
                continue; # pula a execução
            } else if ($num == 51) {
                break; # para o loop completamente
            }

            echo "$num <br>";
        }

        ?>

    </p>

    <hr>

    <h2> Loop Do While </h2>
    <p>
        <?php

        $num = 9;

        do {
            $num++;
            echo "O valor de x é $num <br>";

            echo "Entrou no Do While";
        } while ($num < 9);

        while ($num < 9) {
            $num++;
            echo "O valor de x é $num <br>";

            echo "Entrou no While";
        }

        # A diferença entre os dois está na forma de execução do código, o while testa e executa e do while executa e testa

        ?>

    </p>

    <hr>

    <h2> Loop For </h2>
    <p>
        <?php
        for ($num = 1; $num < 100; $num++) {
            if ($num % 2 == 0) {
                echo 'Número par! <br>';
                continue; # pula a execução
            } else if ($num == 51) {
                break; # para o loop completamente
            }

            echo "$num <br>";
        }


        ?>

    </p>

    <hr>

    <h2> Percorrendo Arrays com Loops </h2>
    <p>
        <?php

        $registro = array('Título 1', 'Título 2', 'Título 3');

        echo '<pre>';
        print_r($registro);
        echo '</pre>';

        $idx = 0;

        while ($idx < 3) {
            echo $registro[$idx] . '<br>';
            $idx++;
        }

        echo '<hr>';

        $registro_noticias = array(
            array('titulo' => 'Título Notícia 1', 'conteudo' => 'Conteúdo Notícia 1'),
            array('titulo' => 'Título Notícia 1', 'conteudo' => 'Conteúdo Notícia 1'),
            array('titulo' => 'Título Notícia 1', 'conteudo' => 'Conteúdo Notícia 1')
        );

        echo '<pre>';
        print_r($registro_noticias);
        echo '</pre>';

        $id = 0;
        while ($id < count($registro_noticias)) {

            echo '<h3>' . $registro_noticias[$id]['titulo'] . '</h3>';
            echo '<p>' . $registro_noticias[$id]['conteudo'] . '</p>';

            $id++;
        }

        ?>

    </p>

    <hr>

    <h2> Loop Foreach </h2>
    <p>
        <?php

        $itens = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

        echo '<pre>';
        print_r($itens);
        echo '</pre>';

        foreach ($itens as $item) {
            echo "$item <br>";

            if ($item == 'mesa') {
                echo 'Na compra da mesa, ganhe 25% de desconto na compra de 4 cadeiras! <br>';
            }
        }

        ?>

    </p>

    <hr>

    <h2> Loop Foreach arrays associativos e encadeados </h2>
    <p>
        <?php

        $funcionarios = array(
            array('nome' => 'João', 'salario' => 2500, 'data de nascimento' => '04/08/1999'),
            array('nome' => 'José', 'salario' => 2200),
            array('nome' => 'Maria', 'salario' => 3000)
        );

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach ($funcionarios as $idc => $funcionarios) {
            foreach ($funcionarios as $idc2 => $valor) {
                echo "$idc2 - $valor <br>";
            }
            echo '<hr>';
        }

        ?>

    </p>

</body>

<html>