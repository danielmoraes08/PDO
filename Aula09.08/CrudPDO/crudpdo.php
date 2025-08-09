<?php

    //Conexão com o Banco de Dados
    try {

        $pdo = new PDO("mysql:dbname=crudpdo;host=localhost","root","",);

    } 
    catch (PDOExeception $e) {
        echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
    } 
    catch (Exeception $e) {
         echo 'Erro genérico: ' . $e->getMessage();
    }

    //Inserção de dados PDO
    /*$resultado = $pdo->prepare('insert into pessoa(nome,telefone,email) values(:n,:t,:e)');
    $resultado->bindValue(':n', 'Ivanildo');
    $resultado->bindValue(':t', '11 99999-8888');
    $resultado->bindValue(':e', 'd@gmail.com');
    $resultado->execute();*/

    //Exclusão de dados PDO
    /*$resultado = $pdo->prepare('delete from pessoa where id=:id');
    $resultado->bindValue(':id',2);
    $resultado->execute();*/

    //Alteração de dados PDO
    /*$resultado = $pdo->prepare('update pessoa set email=:e where id=:id');
    $resultado->bindValue(':id',1);
    $resultado->bindValue(':e', 'a@gmail.com');
    $resultado->execute();*/
?>