<?php 
    session_start();
    if($_SESSION["Login"] != "SIM"){
        header("Location: form_ligon.html");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 11 | Sistema de Login - Edição de Cadastro</title>
    </head>
    <body>
        <?php
            $codigo = $_GET["codigo"];

            require "conectar.php";

            $membro = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `tbl_usuario` WHERE id = $codigo"));

            require "desconectar.php";

            echo $msg_body = "
            <p align='right'>Login feito por ".$_SESSION["Usuario"]."</p>
            <p align='right'>
                <a href='listar.php'>| LISTAR USUARIO </a> |
                <a href='logoff.php'>LOGOFF</a> |
            </p>";
        ?>
        <p align='right'>
            <a href="index.html">| PAGINA INICIAL</a> |
            <a href="form_login.html">FAZER LOGIN</a> |
        </p>

        <form method="POST" action="atualizar_usuario.php">
            <p>ID:<input type="text" name="id" value="<?php echo $membro["id"];?>"></p>
            <p>Nome:<input type="text" name="Nome" value="<?php echo $membro["NomeUsuario"];?>"></p>
            <p>Sobrenome:<input type="text" name="Sobrenome" value="<?php echo $membro["SobrenomeUsuario"];?>"></p>
            <p>Email:<input type="text" name="Email" value="<?php echo $membro["DataNascUsuario"];?>"></p>
            <p>Celular:<input type="text" name="Celular" value="<?php echo $membro["EmailUsuario"];?>"></p>
            <p>Dt. Nasc:<input type="date" name="DataNasc" value="<?php echo $membro["SenhaUsuario"];?>"></p>
            <p>Senha:<input type="password" name="Senha" placeholder="Digite a Senha" value="<?php echo $membro["CelularUsuario"];?>"></p>
            <p><input type="submit" value="Atualizar"></p>
        </form>
    </body>
</html>