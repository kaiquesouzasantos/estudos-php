<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 03 | Exemplo 03</title>
    </head>
    <body>
        <?php 
            $d = 10; # variavel global => visivel e acessivel para todas as funções[global $variavel => referenciar]

            function Escreve(){
                $d = 18; # variavel local => existe somente dentro da uma função
                echo "<p>Variavel Local: ".$d."</p>";
            }

            Escreve();
            echo "<p>Variavel Global: ".$d."</p>";
        ?>
        <p>Exemplos de Variaveis</p>
    </body>
</html>