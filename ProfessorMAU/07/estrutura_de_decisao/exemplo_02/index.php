<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 07 | Estrutura de Decisão - Exemplo 02</title>
    </head>
    <body>
        <?php 
            $p = 25;
            $q = 30;

            if($p == $q){
                echo "
                    O valor da variavel p é $p<br>
                    O valor da variavel q é $q<br>
                    Elas são iguais, a soma é ".($j = $p + $q)."<br>";
            }else{
                echo "
                    O valor da variavel p é $p<br>
                    O valor da variavel q é $q<br>
                    Elas não são iguais, a subtração é ".($j = $p - $q)."<br>";
            }
        ?>
    </body>
</html>