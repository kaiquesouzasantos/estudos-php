<?php 
    session_start();

    if($_SESSION["Login"] != "SIM"){
        header("Location: form_login.html");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 10 | Login</title>
    </head>
    <body>
        <h1>Você está em um arquivo restrito</h1>
        <p>Permitido somente para usuarios autorizados.</p>
        <p><a href="logoff.php">LOGOFF</a></p>
    </body>
</html>