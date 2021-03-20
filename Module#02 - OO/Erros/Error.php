<!DOCTYPE html>

<head>
    <title> PHP OO 13 - Tratamento de Erros </title>
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

    try {
        echo '<h3>***TRY***</h3>';
    } finally {
        echo '<h3>***FINALLY***</h3>';
    }

    echo '<hr>';

    try {
        $sql = 'select * from clientes';
        mysql_query($sql);
    } catch (Error $e) {
        echo 'Comando inválido!';
        echo '<br>';
        echo 'Erro encontrado:';
        echo '<p style="color: red">' . $e . '</p>';
    }

    echo '<hr>';

    try {

        if (!file_exists('require_pdf_file.php')) {
            throw new Exception('Arquivo informado não existe na data ' . date('d/m/Y H:i:s') . ' favor cria-lo para que possa ser utilizado pelo programa');
        }
    } catch (Exception $b) {
        echo 'Arquivo não encontrado!';
        echo '<br>';
        echo 'Erro encontrado:';
        echo '<p style="color: red">' . $b . '</p>';
    }

    echo '<hr>';

    class MinhaExceptionCustomizada extends Exception
    {

        private $erro = '';

        public function __construct($erro)
        {
            $this->erro = $erro;
        }

        public function exibirMensagemErroCustomizada()
        {
            echo '<div style="border: solid 1px #000; padding: 15px; background-color: red; color: white;">';
            echo $this->erro;
            echo '</div>';
        }
    }

    try {

        throw new MinhaExceptionCustomizada('Esse é um erro de teste');
    } catch (MinhaExceptionCustomizada $e) {
        $e->exibirMensagemErroCustomizada();
    }

    ?>

</body>

<html>