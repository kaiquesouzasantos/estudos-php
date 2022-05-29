<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 03 | Exemplo 04 - B</title>
    </head>
    <body>
        <?php 
            $p = 1;
            $b = 2;

            function Soma(){
               global $p, $b;
               $m = $p + $b;

               return $m;
            }

            echo Soma()."<br>";
            echo $p."<br>";
            echo $b."<br>";
        ?>
        <p>Exemplos de Variaveis</p>
    </body>
</html>