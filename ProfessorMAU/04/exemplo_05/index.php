<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 04 | Exemplo 05</title>
    </head>
    <body>
        <?php 
            $valor_01 = 3;
            $valor_02 = 2;

            echo "<h2>Operadores Aritméticos</h2>";

            # SOMA
            echo "A Soma de ".$valor_01." e ".$valor_02." é igual a ".($valor_01+$valor_02)."<br>";
            # SUBTRAÇÃO
            echo "A Subtração de ".$valor_01." e ".$valor_02." é igual a ".($valor_01-$valor_02)."<br>";
            # MULTIPLICAÇÃO
            echo "A Multiplicação de ".$valor_01." e ".$valor_02." é igual a ".($valor_01*$valor_02)."<br>";
            # DIVISÃO
            echo "A Divisão de ".$valor_01." e ".$valor_02." é igual a ".($valor_01/$valor_02)."<br>";
            # POTENCIA
            echo "A Potencia de ".$valor_01." e ".$valor_02." é igual a ".($valor_01**$valor_02)."<br>";
            # MODULO
            echo "O Modulo de ".$valor_01." e ".$valor_02." é igual a ".($valor_01%$valor_02)."<br>";

            # POS-INCREMENTO
            echo "<h3 align='center'>Pos-Incremento</h3>";
            echo "Deve ser 3: ".$valor_01++."<br>";
            echo "Deve ser 4:".$valor_01."<br>";
            /* POS-DECREMENTO
            echo "<h3 align='center'>Pos-Decremento</h3>";
            echo "Deve ser 3: ".$valor_01--."<br>";
            echo "Deve ser 2:".$valor_01."<br>";
            */
            
            # PRE-INCREMENTO
            echo "<h3 align='center'>Pre-Incremento</h3>";
            echo "Deve ser 5: ".++$valor_01."<br>";
            echo "Deve ser 5:".$valor_01."<br>";
            /* PRE-DECREMENTO
            echo "<h3 align='center'>Pre-Decremento</h3>";
            echo "Deve ser 1: ".--$valor_01."<br>";
            echo "Deve ser 1:".$valor_01."<br>";
            */
        ?>
    </body>
</html>