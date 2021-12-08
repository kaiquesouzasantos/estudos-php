<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <style>
                .mostra_foto{
                    width: 250px;
                }
            </style>
            <?php
                include "conexao.php";

                $nome = $_POST['nome'];
                $endereco = $_POST['endereco']; 
                $telefone = $_POST['telefone']; 
                $email = $_POST['email']; 
                $data_nasc = $_POST['data_nasc'];

                $foto = $_FILES['foto']; 
                // $_FILES['foto']['atributos == name - type - error - size']
                $nome_foto = renomear_foto($foto);
                // acessa o atributo name da foto
                if ($nome_foto == 0) {
                    $nome_foto = null;
                }

                $sql = "INSERT INTO `pessoas`(`nome`, `endereco`, `telefone`, `email`, `data_nasc`, `foto`) VALUES ('$nome','$endereco','$telefone','$email','$data_nasc','$nome_foto')";

                if(mysqli_query($conn, $sql)){
                    if ($nome_foto != null) {            	
                        echo "<img src='img/$nome_foto' title='$nome_foto' class='mostra_foto'>";
                    }
                    mensagem("<b>$nome</b> cadastrado com sucesso!","success");
                }else{
                    mensagem("$nome não foi cadastrado!","danger");
                }
            ?>
            <a href="cadastro.php" class="btn btn-success">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>