<?php 
    session_start();

    if($_SESSION["Login"] != "SIM"){
        header("Location: form_login.html");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kaique Souza Santos">
        <title>Aula 11 | Listar Usuários</title>
    </head>
    <body>
        <?php 
            $msg_body = "
            <p align='right'>Login feito por ".$_SESSION['Usuario']."</p>
            <p align='right'>
                <a href='listar.php'>| LISTAR USUARIO </a> |
                <a href='logoff.php'>LOGOFF</a> |
            </p>";

            require "conectar.php";

            $consulta = mysqli_query($conn, $strSQL = "SELECT id, NomeUsuario, SobrenomeUsuario, CelularUsuario, DataNascUsuario, EmailUsuario FROM tbl_usuario");

            echo $msg_body;
            echo " 
                <table border='1' align='center'> 
                    <tr><td>ID</td><td>NOME</td><td>SOBRENOME</td><td>CELULAR</td><td>DT.NASCIMENTO</td><td>EMAIL</td></tr>";
                    while($linha = mysqli_fetch_array($consulta)){
                        echo "<tr><td>".$linha["id"]."</td><td>".$linha["NomeUsuario"]."</td><td>".$linha["SobrenomeUsuario"]."</td><td>".$linha["CelularUsuario"]."</td><td>".$linha["DataNascUsuario"]."</td><td>".$linha["EmailUsuario"]."</td>
                        <td><a href=form_ver_usuario.php?codigo=".$linha["id"]."><button>EDITAR</button></a></td><td><a href=excluir.php?codigo=".$linha["id"]."><button>EXCLUIR</button></a></td></tr>";
                    }
            echo "</table>";

            require "desconectar.php";
        ?>
    </body>
</html>