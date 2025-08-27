<?php
    require_once 'classe-pessoa.php';
    $p = new Pessoa('crud','localhost','root','');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <?php
        if (isset($_POST['nome'])) 
        {
            $nome = addslashes($_POST['nome']);
            $telefone = addslashes($_POST['telefone']);
            $email = addslashes($_POST['email']);

            if(!empty($nome) && !empty($telefone) && !empty($email))
            {
                if(!$p->cadastrarPessoa($nome, $telefone, $email))
                {
                   echo "Este email já foi cadastrado.";
                }
            }
        }
    
    ?>    

    <section id="left">
        <form method='post'>
            <h2>Cadastrar Pessoa</h2>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"> 
            <input type="submit" value="Cadastrar">
        </form>

       

    </section>

    <section id="right">

        <table>
            <tr id="title">
                <td>Nome</td>
                <td>Telefone</td>
                <td colspan="2">Email</td>   
            </tr>

            <?php
                $dados = $p->buscarDados();

                if(count($dados) > 0){
                    for ($i=0; $i < count($dados); $i++) { 
                        echo '<tr>';
                        foreach($dados[$i] as $key => $value){
                            if($key != 'id'){
                                echo '<td>'. $value . '</td>';
                            }
                        }

                        ?> <td> <a href="#">Editar</a> <a href="#">Excluir</a> </td><?php
                        echo '</tr>';
                    }

                } else {
                    echo 'Ainda não há pessoas cadastradas.';
                }
            ?>


        </table>
    </section>

</body>
</html>