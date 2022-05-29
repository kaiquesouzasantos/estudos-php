<?php
    require "conectar.php";

    $codigo = $_POST["id"];
    $Nome = $_POST["Nome"];
    $Sobrenome = $_POST["Sobrenome"];
    $Email = $_POST["Email"];
    $Celular = $_POST["Celular"];
    $DataNasc = $_POST["DataNasc"];
    $Senha = $_POST["Senha"];

    $sql = mysqli_query($conn, "UPDATE tbl_usuario SET NomeUsuario = '$Nome', SobrenomeUsuario = '$Sobrenome', CelularUsuario = '$Celular', DataNascUsuario = '$DataNasc', EmailUsuario = '$Email', SenhaUsuario = '$Senha' WHERE id = '$codigo'");

    if($sql){
        $msg = "Informações atualizadas com sucesso!<br> Aguarde....";
    }else{
        $msg = "Houve um erro!<br> Aguarde....";
    }

    require "desconectar.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="3; URL='listar.php'"/>
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 11 | Atualizar Usuário</title>
    </head>
    <body>
        <?php 
            echo $msg;
        ?>
    </body>
</html>