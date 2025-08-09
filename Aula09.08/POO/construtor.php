<?php

    class Pessoa{

        public $nome;
        public $idade;
        public $telefone;


        function __construct(){
            echo "Função construtura invocada. <br>";
        }

        function Teste(){
            echo 'Testando uma função.';
        }

        function __destruct(){
            echo '<br> Função destrutora invocada';
        }
    }

    $p1 = new Pessoa();
    $p1->Teste(); 
?>