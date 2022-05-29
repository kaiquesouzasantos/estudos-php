<?php
    require "conectar.php";

    $codigo = $_GET["codigo"];

    $sql = mysqli_query($conn, "DELETE FROM tbl_usuario WHERE id = '$codigo'");

    if($sql){
        $msg = "Cadastro deletado com sucesso!<br> Aguarde....";
    }else{
        $msg = "Houve um erro!<br> Tente Novamente....";
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
        <title>Aula 11 | Excluir Usuário</title>
    </head>
    <body>
        <?php 
            
            echo $msg;
        ?>
    </body>
</html>