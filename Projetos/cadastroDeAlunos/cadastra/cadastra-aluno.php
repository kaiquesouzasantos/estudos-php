<?php 
    require("../dao/AlunoDAO.php");
    require("../controller/AlunoController.php");

    if(!AlunoController::validaCPF($_POST['txtCPF'])){
        header("Location: index.php");
    }

    AlunoDAO::cadastrar(
        $_POST['txtNome'], $_POST['txtCPF'], AlunoController::getDestino(), $_POST['slTurma']
    );

    header("Location: ../formularios/formulario-aluno.php");
?>