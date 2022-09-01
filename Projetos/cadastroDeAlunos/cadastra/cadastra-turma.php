<?php 
    require("../dao/TurmaDAO.php");

    TurmaDAO::cadastrar($_POST['txtNome']);

    header("Location: ../formularios/formulario-turma.php");
?>