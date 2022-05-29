<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Inicio | Aula 02</title>
    </head>
    <body>
        <?php 
            echo date("r"); # data completa com GMT
            echo "<p>Hoje é ".date("l")."</p>"; # l => dia da semana 
            echo "<p>Hoje é ".date("w")."</p>"; # w => dia da semana em numeral

            echo "<p>São decorridos exatamente".time()." segundos desde 1 de janeiro de 1970, 12:00 PM, GMT</p>";
            echo "<p>O dia da semana em 1 de janeiro de 1970 foi ".date("l", 0)."</p>";

            echo "<p>Seu login foi ".time()." e ficarei logado por 10 minutos até ".(time()+600)." e será feito o logoff automaticamente!</p><br>";
            
            # mktime(hora, minuto, segundo, mes, dia, ano)
            echo "<h2>Chegada á Lua</h2>";
            echo mktime(2,56,0,7,21,1969)."<br>";
            echo date("r", mktime(2,56,0,7,21,1969))."<br>"; # retorna a data completa
            echo date("d", mktime(2,56,0,7,21,1969))."<br>"; # retorna o dia
            echo date("m", mktime(2,56,0,7,21,1969))."<br>"; # retorna o mes
            echo date("Y", mktime(2,56,0,7,21,1969))."<br>"; # retorna o ano

            echo "<h2>Aniversário</h2>";
            echo mktime(0,15,0,4,24,1976)."<br>";
            echo date("r", mktime(0,15,0,4,24,1976))."<br>"; 
            echo date("j", mktime(0,15,0,4,24,1976))."<br>"; 
            echo date("m", mktime(0,15,0,4,24,1976))."<br>"; 
            echo date("Y", mktime(0,15,0,4,24,1976))."<br>"; 

            echo "<h2>Data de Hoje</h2>";
            echo mktime(0,0,0,1,16,2022)."<br>";
            echo date("r")."<br>";
            echo date("j")."<br>";
            echo date("m")."<br>";
            echo date("Y")."<br>";
            echo "<img src='img/".date("w").".png'>";
        ?>
    </body>
</html>