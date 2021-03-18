<!DOCTYPE html>
<head>
    <title> PHP Basics 6 - Functions </title>
    <meta charset="utf-8">

    <style>
    body {
        font-family: "Helvetica", "Trebuchet MS", sans-serif;
    }
    </style>
</head>
<body>
    <?php 
    # Função gettype() e atribuição de valores
    $valor = 10;
    $valor2 = (float) $valor;
    $valor3 = (string) $valor;

    echo $valor . ' ' . gettype($valor);
    echo '<br>';
    echo $valor2 . ' ' . gettype($valor2);
    echo '<br>';
    echo $valor3 . ' ' . gettype($valor3);
    echo '<hr>';
    
    ?>

<h2> Bem Vindo ao JorgeTerrenos! </h2>

<p>
<?php
function exibirInstruções() {
    echo 'Você pode ver as áreas do terreno e o seu devido valor <br>';
}
exibirInstruções();
?>

<?php
function calcularAreaTerreno($largura, $comprimento) {
    $area = $largura * $comprimento;
    return $area;
}

function calculoPreco($area){
    $frase = '';
    $preco = 0;

    echo 'O valor da área do terreno é de: ' . $area;
    echo '<br>';

    if ($area < 300){
        $preco = 30000;
        $frase = 'o valor desse terreno é: R$' . $preco;
        return $frase;
    } else {
        $preco = 450000;
        $frase = 'Terreno de luxo nas ilhas de yugusglava com valor de: R$' . $preco;
        return $frase;
    }
    return $preco;

    echo $frase;
    echo '<br>';

}

$area = calcularAreaTerreno(25, 60);
echo calculoPreco($area);

echo '<hr>'
?>
</p>

<h2> Funções de manipulação de Strings </h2>
<p>
<?php

$texto = 'Na realidade, tudo o que o Clóvis Mascarenhas está falando é mentira';

echo $texto;
echo '<br>';
echo strtolower($texto);
echo '<br>';
echo strtoupper($texto);
echo '<br>';
echo 'A quantidade de caracteres na string é de ' . strlen($texto);
echo '<br>';
echo str_replace( 'mentira', 'verdade', $texto);
?>

</p>

<hr>

<h2> Funções de manipulações de Datas </h2>

<p>
<?php
echo Date('d/m/Y H:i');
echo '<br>';
echo date_default_timezone_get();
date_default_timezone_set('America/Sao_Paulo');
echo '<br>';
echo date_default_timezone_get();
echo '<br>';
echo Date('d/m/Y H:i');
# Para modificar o timezone no próprio php, ir para php.ini, pesquisar timezone e modificar para America/Sao_Paulo
?>

<hr>

<h2> Calculo com Datas </h2>

<?php
$data_inicial = '2020-12-25';
$data_final = '2021-02-27';


$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

echo $data_inicial . ' - ' . $time_inicial;
echo '<br>';
echo $data_final . ' - ' . $time_final;

$diferenca_times = $time_final - $time_inicial;
echo '<br>';
echo 'A diferença de segundos entra a dara inicial e a data final é de ' . $diferenca_times;

$segundos_no_dia = 24 * 60 * 60;
$diferenca_dias_datas = $diferenca_times / $segundos_no_dia;

echo '<br>';
echo 'A quantidade de dias de diferença entre as datas é de ' . $diferenca_dias_datas . ' dias.'
?>

</p>

</body>

<html>