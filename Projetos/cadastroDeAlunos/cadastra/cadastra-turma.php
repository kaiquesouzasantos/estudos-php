<?php 
    require("../dao/TurmaDAO.php");

    if(empty($_POST['txtNome'])){
        header("Location: ../formularios/formulario-turma.php");
    }

    TurmaDAO::cadastrar($_POST['txtNome']);

    header("Location: ../formularios/formulario-turma.php");
?>