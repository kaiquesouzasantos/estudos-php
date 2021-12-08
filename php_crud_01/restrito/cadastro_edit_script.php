<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro | Alteração</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
                include "conexao.php";

                // ERRO NA EDIÇÃO DO CADASTRO => TRAFEGO INTERROMPIDO

                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $endereco = $_POST['endereco']; 
                $telefone = $_POST['telefone']; 
                $email = $_POST['email']; 
                $data_nasc = $_POST['data_nasc'];
                
                $sql = "UPDATE `pessoas` SET `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `data_nasc` = '$data_nasc' WHERE cod_pessoas = $id";
          
                if(mysqli_query($conn, $sql)){
                    mensagem("$nome alterado com sucesso!","success");
                }else{
                    mensagem("$nome não foi alterado!","danger");
                }
            ?>
            <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>