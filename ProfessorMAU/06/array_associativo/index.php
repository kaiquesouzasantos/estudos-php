<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 06 | Array Associativo</title>
    </head>
    <body>
        <?php 
            $NOTAS = array('JOAO' => 8,'MARIA'=>9,'JOSE'=>6,'POTTER'=>2,'MAURICIO'=>5);

            echo "<table border=1>
                    <tr><td>NOME</td><td>NOTA</td></tr>";
                    foreach ($NOTAS as $aluno => $nota){
                        echo "<tr><td>$aluno</td><td align='center'>$nota</td></tr><br>";
                    }
            echo "</table>";
        ?>
    </body>
</html>