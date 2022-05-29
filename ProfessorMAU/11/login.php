<?php
    if($_POST["Email"] == null){
        header("Location: form_login.html");
    }else{
        $UsuarioDigitado = $_POST["Email"];
        $SenhaDigitado = $_POST["Senha"];
    }

    require "conectar.php";

    $strSQL = mysqli_query($conn, "SELECT EmailUsuario, SenhaUsuario FROM tbl_usuario WHERE EmailUsuario = '$UsuarioDigitado'");

    while($linha = mysqli_fetch_array($strSQL)){
        $UsuarioBD = $linha["EmailUsuario"];
        $SenhaBD = $linha["SenhaUsuario"];
    }

    require "desconectar.php";

    if($UsuarioDigitado == $UsuarioBD && $SenhaDigitado == $SenhaBD){
        session_start();
        $_SESSION["Login"] = "SIM";
        $msg_body = "
            <p align='right'>Login feito por $UsuarioBD</p>
            <p align='right'>
                <a href='listar.php'>| LISTAR USUARIO </a> |
                <a href='logoff.php'>LOGOFF</a> |
            </p>";
        $_SESSION["Usuario"] = $UsuarioBD;
    }else{
        session_start();
        $_SESSION["Login"] = "NAO";
        $msg_body = "<h1>Você não está logado</h1><p><a href='res_documento.php'>Link para arquivo restrito</a></p>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 11 | Login</title>
    </head>
    <body>
        <?php 
            echo $msg_body;
        ?>
    </body>
</html>