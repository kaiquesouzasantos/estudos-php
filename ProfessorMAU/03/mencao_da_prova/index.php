<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 03 | Mencao da Prova</title>
    </head>
    <body>
        <?php 
            $aluno = "Kaique Souza Santos";
            $professor = "Mauricio";
            $componente = "Programação WEB II";
            $mencao = "MB";

            echo "
                <table border='1'>
                    <tr bgcolor='yellow'><td>ALUNO</td><td>PROFESSOR</td><td>COMPONENTE</td><td>MENCAO</td></tr>
                    <tr><td>".$aluno."</td><td>".$professor."</td><td>".$componente."</td><td>".$mencao."</td></tr>
                </table>";
        ?>
        <p>Exemplos de Variaveis</p>
    </body>
</html>