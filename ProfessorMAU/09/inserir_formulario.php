<?php
    require "conectar.php";

    $Nome = $_POST["Nome"];
    $Sobrenome = $_POST["Sobrenome"];
    $Email = $_POST["Email"];
    $Celular = $_POST["Celular"];
    $DataNasc = $_POST["DataNasc"];
    $Senha = $_POST["Senha"];

    $strSQL = "INSERT INTO `tbl_usuario`(`NomeUsuario`, `SobrenomeUsuario`, `EmailUsuario`,`CelularUsuario`, `DataNascUsuario`, `SenhaUsuario`) VALUES ('$Nome','$Sobrenome','$Email','$Celular','$DataNasc','$Senha')";

    mysqli_query($conn, $strSQL);

    require "desconectar.php";
?>