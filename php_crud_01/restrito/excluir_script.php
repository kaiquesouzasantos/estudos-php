<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro | Exclusão</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
                include "conexao.php";

                $id = $_POST['id'];
                $nome = $_POST['nome'];
               
                $sql = "DELETE FROM `pessoas` WHERE cod_pessoa = $id";
          
                if(mysqli_query($conn, $sql)){
                    mensagem("$nome excluido com sucesso!","success");
                }else{
                    mensagem("$nome não foi excluido!","danger");
                }
            ?>
            <a href="pesquisa.php" class="btn btn-success">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>