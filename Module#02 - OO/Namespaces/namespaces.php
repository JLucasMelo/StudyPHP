<!DOCTYPE html>

<head>
    <title> PHP OO 12 - Namespaces </title>
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

    namespace A;

    class Cliente implements \B\CadastroInterface
    {
        public $nome = 'Jorge';

        public function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr)
        {
            return $this->$attr;
        }

        public function salvar()
        {
            echo 'Salvar';
        }

        public function remover()
        {
            echo 'Remover';
        }
    }

    interface CadastroInterface
    {
        public function salvar();
    }

    namespace B;

    class Cliente implements \A\CadastroInterface
    {
        public $nome = 'Jamilton';

        public function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr)
        {
            return $this->$attr;
        }

        public function remover()
        {
            echo 'Remover';
        }

        public function salvar()
        {
            echo 'Salvar';
        }
    }

    interface CadastroInterface
    {
        public function remover();
    }

    //---------------

    $c = new \B\Cliente();
    print_r($c);
    echo $c->__get('nome');

    /*
    
    Implementação de bibliotecas externas

    require "./bibliotecas/lib1/lib1.php";
	require "./bibliotecas/lib2/lib2.php";

	use A\Cliente as C1;
	use B\Cliente as C2;

	$c = new C1();
	print_r($c);
	echo $c->__get('nome');

	$c = new C2();
	print_r($c);
	echo $c->__get('nome');
    
    */

    ?>

</body>

<html>