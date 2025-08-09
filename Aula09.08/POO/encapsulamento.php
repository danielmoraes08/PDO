<?php

    class Pessoa{

        private $nome;
        private $telefone;
        private $email;

        //Getters & Setters
        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function getNome(){
            return $this->nome;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        
        public function getTelefone(){
            return $this->telefone;
        }

        public function setEmail($email){
            $this->email = $email;
        }
        
        public function getEmail(){
            return $this->email;
        }

    }

    $p = new Pessoa();
    $p->setNome('Daniel');
    $p->setTelefone('1199999-8888');
    $p->setEmail('d@gmail.com');


    echo $p->getNome() . '<br>';
    echo $p->getTelefone() . '<br>';
    echo $p->getEmail();

?>