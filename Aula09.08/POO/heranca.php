<?php

    // Superclasse Classe-Pai Base
    abstract class Pessoa{
        public $nome;
        public $telefone;
        public $endereco;
        public $email;

        function BoasVindas(){
            echo 'Seja Bem-Vindo ao nosso curso. <br>';
        }
    }

    //Subclasse Classe-filha
    class Funcionario extends pessoa{
        public $setor;
        public $cargo;
        public $salario;
    }

    $f1 = new Funcionario();
    $f1->nome='Daniel';
    $f1->cargo='Estagiário';
    $f1->salario=1000;

    $f1->BoasVindas();
    echo 'O ' . $f1->cargo . ' ' . $f1->nome . ' ganha R$' . $f1->salario . ',00.' ;
    

?>