<!DOCTYPE html>
<head>
    <title> PHP Basics 5 - If/Else and Switch </title>
    <meta charset="utf-8">

    <style>
    body {
        font-family: "Helvetica", "Trebuchet MS", sans-serif;
    }
    </style>
</head>
<body>
    <?php 
    
    $num1 = 2;
    $num2 = 3;

    if ($num1 > $num2 && $num1 % 2 ==0) {
        echo 'O  valor ' . $num1 . ' é maior que o valor ' . $num2 . ' e é um número par'; 
    } else {
        echo 'O número ' . $num1 . ' não é maior que o número ' . $num2 . ' ou é impar';
    }
    
    ?>

    <hr>

    <?php 
    
    $nome = 'Antonio dos Santos';

    $usuarioPossuiCartao = true;
    $valorCompra = 270;

    $valorFrete = 25;
    $recebePromo = false;
    $recebePromoPorc = false;

    $descPorc = 0.25 * $valorCompra;

    if($usuarioPossuiCartao == true && $valorCompra >=100 && $valorCompra < 250){
        $valorFrete = 0;
        $recebePromo = true;
    } else if ($usuarioPossuiCartao == true && $valorCompra >= 250) {
        $valorFrete = 0;
        $recebePromo = true;
        $recebePromoPorc = true;
    }
    
    ?>

    <h2>Detalhes da compra</h2>
    <p>
    <?php echo 'O cliente ' . $nome . ' possui o cartão da loja? <br>';
    /*
    if($usuarioPossuiCartao == true) { 
        echo 'SIM!'; 
    } else { 
        echo 'NÃO!';
    }
    */
    ?> 
    <?= $usuarioPossuiCartao ? 'SIM!' : 'NÃO!'; ?>
    </p>

    <p>
    <?php 
    $valorTotal = 0;
    
    echo 'Valor do(s) produto(s): R$' . $valorCompra . '<br>';
    echo 'Valor da taxa de entrega: R$' . $valorFrete . '<br>';
    echo '<br>';
    echo '<hr>';

    if ($recebePromo == true  && $recebePromoPorc == false) { 
        $valorTotal  =  $valorCompra;
        echo 'Valor total é R$' . $valorTotal; 
    } else if ($recebePromo == true  && $recebePromoPorc == true) { 
        $valorTotal = $valorCompra - $descPorc;
        echo 'Valor total é R$' . $valorTotal; 
    } else { 
        $valorTotal = $valorCompra + $valorFrete;
        echo 'Valor total é R$' . $valorTotal; 
    }

    ?>

    </p>

    <hr>

    <?php 
    
    echo 'Mercadinho de Verduras da Dona Sônia!';
    echo '<br>';
    echo '<hr>';

    /*
    Cenoura
    Batata
    Abobrinha
    Xuxú
    Mamão
    */

    $cenoura = 10;
    $abobrinha = 16;
    $batata = 18;
    $xuxu = 19;
    $mamao = 8;

    $verdura = 'Abobrinha';

    switch ( strtolower($verdura)  ) {
        case 'cenoura': 
            echo 'O preço da Cenoura é: R$' . $cenoura;
            break;
        case 'batata': 
            echo 'O preço da Batata é: R$' . $batata;
            break;
        case 'abobrinha': 
            echo 'O preço da Abobrinha é: R$' . $abobrinha;
            break;
        case 'xuxu': 
            echo 'O preço da Xuxú é: R$' . $xuxu;
            break;     
        case 'mamao': 
            echo 'O preço da Mamão é: R$' . $mamao;
            break;   

        default: 
            echo 'Verdura não vendida aqui!';
            break;

    }
    
    ?>

    <hr>
</body>

<html>