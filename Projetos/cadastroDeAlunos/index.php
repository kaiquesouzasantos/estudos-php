<?php 
    require "controller/ViewController.php";
    ViewController::getHead();
?>

<body>
    <div class="title-container">
        <h1>Exercicio 04 | Cadastro de Aluno e Turma</h1>
    </div>
    <div class="container">
        <div class="card mb-3">
            <a class="btn btn-dark" href="formularios/formulario-aluno.php">Cadastrar Aluno</a>
        </div>
        <div class="card mb-3">
            <a class="btn btn-dark" href="formularios/formulario-turma.php">Cadastrar Turma</a>
        </div>
        <div class="card mb-3">
            <a class="btn btn-success" href="lista-registros/lista-registros-aluno.php">Listar Alunos</a>
        </div>
    </div>
</body>
</html>