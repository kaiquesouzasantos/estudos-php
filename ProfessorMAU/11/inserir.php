<?php
    require "conectar.php";

    $Nome = $_POST["Nome"];
    $Sobrenome = $_POST["Sobrenome"];
    $Email = $_POST["Email"];
    $Celular = $_POST["Celular"];
    $DataNasc = $_POST["DataNasc"];
    $Senha = $_POST["Senha"];

    $sql = mysqli_query($conn, "INSERT INTO `tbl_usuario`(`NomeUsuario`, `SobrenomeUsuario`, `EmailUsuario`,`CelularUsuario`, `DataNascUsuario`, `SenhaUsuario`) VALUES ('$Nome','$Sobrenome','$Email','$Celular','$DataNasc','$Senha')");

    if($sql){
        $msg = "Você foi cadastrado com sucesso";
    }else{
        $msg = "Houve um erro! Veja o ultimo cliente cadastrado com sucesso.";
    }

    require "desconectar.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 11 | Inserindo Usuário</title>
    </head>
    <body>
        <?php 
            require "conectar.php";
            
            echo '
            <p align="rigth">
                <a href="form_cad_usuario.html">| CADASTRAR USUÁRIO</a> |
                <a href="form_login.html">FAZER LOGIN</a> |
            </p>
            ';

            echo "<h3 align='center'>$msg</h3>";

            $sql = mysqli_query($conn, "SELECT * FROM `tbl_usuario` ORDER BY `id` DESC limit 1");

            while($usuario = mysqli_fetch_object($sql)){
                echo "<b>Nome:</b>".$usuario->NomeUsuario."<br>";
                echo "<b>Sobrenome:</b>".$usuario->SobrenomeUsuario."<br>";
                echo "<b>Celular:</b>".$usuario->CelularUsuario."<br>";
                echo "<b>Data de Nascimento:</b>".$usuario->DataNascUsuario."<br>";
                echo "<b>Email:</b>".$usuario->EmailUsuario."<br>";
            }

            require "desconectar.php";
        ?>
    </body>
</html>