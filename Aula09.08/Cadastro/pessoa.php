<?php

    class Pessoa{

        private $pdo;
        private $nome;
        private $telefone;
        private $email;
        

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

        //Método construtor que realiza conexão com o banco
        public function __construct($dbname,$host,$user,$password){
            
            try{
                $this->pdo = new PDO('mysql:dbname=' . $dbname . ';host=' . $host,$user,$password);
            }
            catch(PDOException $e){
                echo 'Erro na conexão: ' . $e->getMessage();
            }
            catch(Exception $e){
                echo 'Erro genérico: ' . $e->getMessage();
            
            }

        }

        public function cadastrar(){
            $cmd = $this->pdo->prepare('select id from pessoa where email=:e');
            $cmd->bindValue(':e',$this->getEmail());
            $cmd->execute();
            if ($cmd->rowCount()>0) {
                return false;
            }
            else{
                $cmd=$this->pdo->prepare('insert into pessoa(nome,telefone,email) values(:n,:t,:e)');
                $cmd->bindValue(':n',$this->getNome());
                $cmd->bindValue(':t',$this->getTelefone());
                $cmd->bindValue(':e',$this->getEmail());
                $cmd->execute();
                return true;
            }
        }
    }
    


?>