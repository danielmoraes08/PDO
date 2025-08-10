<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>

<body>

    <h1>Cadastro de clientes</h1>
    <hr>
    <form action="" method="post">
        <p>Nome: <br><input type="text" name="nome"></p>
        <p>Telefone: <br><input type="text" name="telefone"></p>
        <p>Email: <br><input type="email" name="email"></p>
        <p><input type="submit" name="Enviar" value="Cadastrar"></p>
    </form>

</body>

</html>

<?php

    include('pessoa.php');
    $pessoa = new Pessoa('crudpdo','localhost','root','');

    //Inserção de dados PDO
    if (isset($_POST['Enviar'])) {
        $pessoa->setNome($_POST['nome']);
        $pessoa->setTelefone($_POST['telefone']);
        $pessoa->setEmail($_POST['email']);

        //Verifica se os campos estão preenchidos
        if (!empty($pessoa->getNome) && !empty($pessoa->getTelefone) && !empty($pessoa->getEmail)) {

            if (!$pessoa->cadastrar()) {
            echo 'Já existe um usuário com esse email!';
            }
            else{
                $pessoa->cadastrar();
            }

        }
        else{
            echo 'Preencha todos os campos.';
        }
        
        
    }
?>
