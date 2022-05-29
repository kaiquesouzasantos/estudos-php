<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Inicio | Aula 01</title>
    </head>
    <body>
        <?php 
            echo "<center>";
            echo "<h1>Seja Bem Vindo!</h1>";
            echo "</center>";

            $Nome = "Kaique";
            $Sobrenome = "Souza Santos";
            $DataNascimento = "12/02/2006";

            echo "<font color=blue>".$Nome."</font><br>";
            echo "<font size=5>".$Sobrenome."</font><br>";
            echo "<p align=right>".$DataNascimento."</p>";
        ?>
    </body>
</html>