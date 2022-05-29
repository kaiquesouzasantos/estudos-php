<?php 
    $server = "localhost";
    $user = "root_depuracao";
    $pass = "root_depuracao";
    $bd = "bd_site";

    $conn = mysqli_connect($server, $user, $pass,$bd);

    mysqli_set_charset($conn, "utf8mb4");

    /* 
    <database> bd_site
    <table> tbl_usuario
        <column>id INT AUTO_INCREMENT PRIMARY KEY</column>
        <column>NomeUsuario VARCHAR(50)</column>
        <column>SobrenomeUsuario VARCHAR(150)</column>
        <column>DataNascUsuario DATE</column>
        <column>EmailUsuario VARCHAR(150) UNIQUE</column>
        <column>SenhaUsuario VARCHAR(50)</column>
        <column>CelularUsuario VARCHAR(15)</column>
    </table>
    */
?>

