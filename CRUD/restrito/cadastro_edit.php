<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro | Alteração</title>
</head>

<body>
    <?php
        include "conexao.php";

        $id = $_GET['id'] ?? '';
        $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";
        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro | Alteração</h1>
                <form action="cadastro_edit_script.php" method="POST">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome'];?>"> 
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco" required  value="<?php echo $linha['endereco'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone" required value="<?php echo $linha['telefone'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required  value="<?php echo $linha['email'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="dat_nasc" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nasc" required value="<?php echo $linha['data_nasc'];?>">
                    </div>
                    <input type="submit" class="btn btn-success" value="Salvar">
                    <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa'];?>">
                    <a class="btn btn-primary btn-success" href="index.php" role="button">Voltar</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>