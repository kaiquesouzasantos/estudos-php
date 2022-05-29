<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 06 | Matriz</title>
    </head>
    <body>
        <?php 
            $FRUTAS = array(
                array('001','UVA','QUILO','R$3,50'),
                array('002','PERA','QUILO','R$4,50'),
                array('003','BANANA','DUZIA','R$2,50'),
                array('004','LARANJA','DUZIA','R$0,90'),
                array('005','MAÇA','QUILO','R$2,50'),
                array('006','MANGA','QUILO','R$5,50'),
                array('007','GOIABA','DUZIA','R$2,90'),
                array('008','MAMAO','UNIDADE','R$2,50'),
                array('009','MELAO','UNIDADE','R$7,90'),
                array('010','LIMAO','DUZIA','R$1,50')
            );

            echo $FRUTAS[0][0]." - ".$FRUTAS[0][1]." - ".$FRUTAS[0][2]." - ".$FRUTAS[0][3]."<br>";
            echo $FRUTAS[1][0]." - ".$FRUTAS[1][1]." - ".$FRUTAS[1][2]." - ".$FRUTAS[1][3]."<br>";
            echo $FRUTAS[2][0]." - ".$FRUTAS[2][1]." - ".$FRUTAS[2][2]." - ".$FRUTAS[2][3]."<br>";
            echo $FRUTAS[3][0]." - ".$FRUTAS[3][1]." - ".$FRUTAS[3][2]." - ".$FRUTAS[3][3]."<br>";
            echo "==============================================================================";

            echo "
            <table border=1>
                <tr><td>CODIGO</td><td>FRUTA</td><td>UNIDADE</td><td>PRECO</td></tr>";
                for($linha = 0;$linha < 10;$linha++){
                    echo "<tr>";
                    for($coluna = 0;$coluna < 4;$coluna++){
                        echo "<td>".$FRUTAS[$linha][$coluna]."</td>";
                    }
                    echo "<tr>";
                }
            echo "<table>";
        ?>
    </body>
</html>