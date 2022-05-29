<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 06 | Array</title>
    </head>
    <body>
        <?php 
            $CORES = array('verde','amarelo','azul','branco');

            echo "A cor do céu é $CORES[2]<br>";
            echo "A cor da grama é $CORES[0]<br>";
            echo "A cor do sol é $CORES[1]<br>";
            echo "A cor das nuvens é $CORES[3]<br>";

            echo "<img src='img/$CORES[2].png'> - A cor do céu é $CORES[2]<br>";
            echo "<img src='img/$CORES[0].png'> - A cor da grama é $CORES[0]<br>";
            echo "<img src='img/$CORES[1].png'> - A cor do sol é $CORES[1]<br>";
            echo "<img src='img/$CORES[3].png'> - A cor das nuvens é $CORES[3]<br>";

        ?>
    </body>
</html>