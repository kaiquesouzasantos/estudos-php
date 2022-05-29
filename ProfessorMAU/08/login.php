<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 08 | Sistema de Login - Login</title>
    </head>
    <body>
        <?php 
           if($_POST["nome_usuario"] == "Itaquera" && $_POST["senha_usuario"] == "Timao"){
               session_start();
               $_SESSION["login"] = "SIM";
               echo "<h1>Usuario e senha esta correto, voce esta logado!</h1>";
               echo "<p><a href='pagina_restrita.php'>Link para o arquivo restrito</p>";
            }else{
                session_start();
                $_SESSION["login"] = "NAO";
                echo "<h1>Usuario e senha esta incorreto, voce NAO esta logado!</h1>";
                echo "<p><a href='pagina_restrita.php'>Link para o arquivo restrito</p>";
            }
        ?>
    </body>
</html>