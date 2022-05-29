<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 04 | Exemplo 06</title>
    </head>
    <body>
        <?php 
            function F(){
                static $num = 100;
                return $num--;
            }

            for($contador = 1; $contador < 100; $contador++){
                echo "<p>".F()."</p>";
            }
        ?>
    </body>
</html>