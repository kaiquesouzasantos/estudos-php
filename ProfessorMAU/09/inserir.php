<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 09 | Sistema de Login - Formulario</title>
    </head>
    <body>
        <?php 
            require "conectar.php";

            $Nome = "Kaique";
            $Sobrenome = "Souza Santos";
            $Email = "kaique.tudojoia_3@gmail.com";
            $Celular= "11-1234-5678";
            $DataNasc = "2006-02-12";
            $Senha= "kaique.opa";

            $strSQL = "INSERT INTO `tbl_usuario`(`NomeUsuario`, `SobrenomeUsuario`, `EmailUsuario`,`CelularUsuario`, `DataNascUsuario`, `SenhaUsuario`) VALUES ('$Nome','$Sobrenome','$Email','$Celular','$DataNasc','$Senha')";

            mysqli_query($conn, $strSQL);

            require "desconectar.php";
            echo $strSQL;
        ?>

        <h1>Banco de Dados Atualizado</h1>
    </body>
</html>