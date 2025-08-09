<?php

    class Pessoa{
        public $nome;
        public $idade;
        public $endereco;
        public $email;

        public function BoasVindas(){
            echo 'Bem-vindo ao nosso Curso de Orientação a Objetos PHP';
        }

    } //fim classe Pessoa

    //Instância da classe    
    $p1=new Pessoa();
    $p2=new Pessoa();

    //var_dump($p1);

    $p1->BoasVindas();
    echo '<br>';
    // -> Membro da classe
    $p1->nome = 'Daniel';
    $p1->idade = 16;

    $p2->nome = 'Ivanildo';
    $p2->idade = 40;

    echo $p1->nome . ' tem ' . $p1->idade . ' anos.';
    echo '<br>';
    echo $p2->nome . ' tem ' . $p2->idade . ' anos.';
    
?>