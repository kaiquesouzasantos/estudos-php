<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 07 | Estrutura de Decisão - Exemplo 04</title>
    </head>
    <body>
        <?php 
            $i = date("w");

            switch ($i){
                case "0":
                    echo "Domingo";
                    break;
                case "1":
                    echo "Segunda-feira";
                    break;
                case "2":
                    echo "Terça-feira";
                    break;
                case "3":
                    echo "Quarta-feira";
                    break;
                case "4":
                    echo "Quinta-feira";
                    break;
                case "5":
                    echo "Sexta-feira";
                    break;
                default:
                    echo "Sabado";
                    break;
            }
        ?>
    </body>
</html>