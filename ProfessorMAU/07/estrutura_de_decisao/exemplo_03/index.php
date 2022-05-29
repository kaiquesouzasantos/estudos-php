<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 07 | Estrutura de Decisão - Exemplo 03</title>
    </head>
    <body>
        <?php 
            $p = 25;
            $q = 30;

            if($p == $q){
                echo "
                    O valor da variavel p é $p<br>
                    O valor da variavel q é $q<br>
                    Elas são iguais, a multiplicação delas é ".($j = $p * $q)."<br>";
            }elseif($p > $q){
                echo "
                    O valor da variavel p é $p<br>
                    O valor da variavel q é $q<br>
                    P é maior que Q, a subtração de P menos Q é ".($j = $p - $q)."<br>";
            }else{
                echo "
                    O valor da variavel p é $p<br>
                    O valor da variavel q é $q<br>
                    Q é maior que P, a subtração de Q menos P é ".($j = $q - $p)."<br>";
            }
        ?>
    </body>
</html>