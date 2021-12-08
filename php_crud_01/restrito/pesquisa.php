<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Pesquisa</title>
</head>

<body>
    <style>
        .lista_foto{
            width: 70px;
            border-radius: 70px;
        }
    </style>

    <?php
        include "conexao.php";

        $pesquisa = $_POST['busca'] ?? '';
        $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
        $dados = mysqli_query($conn, $sql);
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisa</h1>
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <form class="d-flex" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nome" name="busca" autofocus>
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($linha = mysqli_fetch_assoc($dados)){
                                $cod_pessoa = $linha['cod_pessoa'];
                                $nome = $linha['nome'];
                                $endereco = $linha['endereco'];
                                $telefone = $linha['telefone'];
                                $email = $linha['email'];
                                $data_nasc = $linha['data_nasc']; 
                                $data_nasc = inverteData($data_nasc);
                                $foto = $linha['foto'];

                                if (!$foto == null) {
                                    $mostra_foto = "<img src='img/$foto' class='lista_foto'>";
                                 } else {
                                    $mostra_foto = '';
                                 }
                                
                                echo "
                                    <tr>
                                        <td>$mostra_foto</td>
                                        <th scope='row'>$nome</th>
                                        <td>$endereco</td>
                                        <td>$telefone</td>
                                        <td>$email</td>
                                        <td>$data_nasc</td>
                                        <td>
                                            <a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-warning'>Editar</a>
                                            <a href='#' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#confirma' onclick=".'"'."pegar_dados($cod_pessoa, '$nome')".'"'.">Excluir</a>
                                        </td>
                                    </tr>
                                ";
                            } 
                        ?>
                    </tbody>
                </table>
                <a class="btn btn-primary btn-success" href="index.php" role="button">Voltar</a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação de Exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="excluir_script.php" method="POST">
                        <p>Deseja realmente excluir
                            <b id="nome_pessoa"></b>?
                        </p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                            <input type='hidden' name='nome' id='nome_pessoa_1' value=''>
                            <input type='hidden' name='id' id='cod_pessoa' value=''>
                            <input type="submit" class="btn btn-danger" value="Sim">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script text="text/javascript">
        function pegar_dados(id, nome){
            document.getElementById('nome_pessoa').innerHTML = nome;
            document.getElementById('nome_pessoa_1').value = nome;
            document.getElementById('cod_pessoa').value = id;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>