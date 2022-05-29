<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 07 | Loops - Exemplo 01</title>
    </head>
    <body>
        <?php 
            $contador = 1;

            while($contador <= 50){
                echo "<p>Este texto se repete $contador vezes</p>";
                $x = ++$contador;
            }
        ?>
    </body>
</html>