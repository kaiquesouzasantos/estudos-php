<?php  include "../validar.php";  ?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro Web</title>
</head>

<body>
    <style>
        .container{
            margin-top: 20px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Cadastro Web</h1>
                    <p class="lead">Este é um sistema simpificado de cadastros. Base de estudos para criação de sistemas Web com PHP e MySql.<br>Criado por Kaique Souza Santos.</p>
                    <hr class="my-4">
                    <p>Acesse as funções.</p>
                    <a class="btn btn-primary btn-success" href="cadastro.php" role="button">Cadastro</a>
                    <a class="btn btn-primary btn-success" href="pesquisa.php" role="button">Pesquisa</a>
                    <a class="btn btn-success" href="../logout.php" role="button">Sair</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>