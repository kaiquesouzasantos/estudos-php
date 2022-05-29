<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 05 | Receber Formulário</title>
    </head>
    <body>
       <?php 
            echo "<h1>Bem Vindo, ".$_GET["nome"]."</h1>";
            echo "<h2>Você tem ".$_GET["idade"]." anos!</h2>";
       ?>
    </body>
</html>