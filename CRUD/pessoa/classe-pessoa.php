<?php

    Class Pessoa{

        private $pdo;

        public function __construct($dbname, $host, $user, $password){
            try{
                $this->pdo = new PDO('mysql:dbname='. $dbname . ';host='.$host,$user,$password);
            } catch (PDOException $e) {
                echo 'Erro com banco de dados: '. $e->getMessage();
                exit();
            } catch (Exception $e) {
                echo 'Erro genérico: '. $e->getMessage();
                exit();
            }
        }

        public function buscarDados(){
            
            $res = array();
            $cmd = $this->pdo->query('SELECT * FROM pessoa ORDER BY id DESC;');
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }

        public function cadastrarPessoa($nome, $telefone, $email){

            $cmd = $this->pdo->prepare('SELECT id FROM pessoa WHERE email = :e');
            $cmd->bindValue(':e', $email);
            $cmd->execute();

            if ($cmd->rowCount() > 0) {
                return false;
            } else {
                $cmd = $this->pdo->prepare('INSERT INTO pessoa(nome,telefone,email) VALUES(:n,:t,:e)');
                $cmd->bindValue(':n', $nome);
                $cmd->bindValue(':t', $telefone);
                $cmd->bindValue(':e', $email);
                $cmd->execute();
                return true;
            }
        }

    }

?>