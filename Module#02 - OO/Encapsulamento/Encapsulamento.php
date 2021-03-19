<!DOCTYPE html>

<head>
    <title> PHP OO 9 - Encapsulamento </title>
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

    class Pai
    {
        private $nome = 'Antonio Claudio';
        protected $sobrenome = 'Neiva';
        public $humor = 'Estressado';

        public function __get($attr)
        {
            return $this->$attr;
        }

        public function __set($attr, $value)
        {
            $this->nome = $value;
        }

        private function executarMania()
        {
            echo 'Assobiar';
        }

        protected function responder()
        {
            echo 'Oi';
        }

        public function executarAcao()
        {
            $var = rand(1, 10);

            if ($var >= 1 && $var <= 8) {
                $this->responder();
            } else {
                $this->executarMania();
            }
        }
    }

    class Filho extends Pai
    {
        private $nome = 'Maria clara';
        private $idade = 13;

        private function executarMania()
        {
            echo 'Cantar';
        }
    }

    $pai = new Pai();

    echo $pai->nome;
    echo '<br>';
    $pai->nome = 'Luan';
    echo $pai->nome;
    echo '<br>';
    $pai->executarAcao();

    ?>

</body>

<html>