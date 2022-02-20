<?php
    $server = "localhost";
    $user = "root_depuracao";
    $pass = "root_depuracao";
    $bd = "proj_1_teste";

    if($conn = mysqli_connect($server, $user, $pass,$bd)){
        echo "<div class='alert alert-success' role='alert'>Conectado com Sucesso ao Banco de Dados</div>";     
    }else{
        echo "<div class='alert alert-danger' role='alert'>Falha na Concexão com Sucesso ao Banco de Dados</div>";
    }

    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' role='alert'>
                $texto
              </div>";
    }

    function inverteData($data){
        $data_result = explode("-",$data);
        $escreve = $data_result[2]."/".$data_result[1]."/".$data_result[0];
        return $escreve;
    }

    function renomear_foto($vetor_foto){
        $vetor_tipo_1 = explode("/", $vetor_foto['type']);
		$vetor_tipo_2 = $vetor_tipo_1[0] ?? '';
		$vetor_extensao = "." .$vetor_tipo_1[1] ?? '';

        if((!$vetor_foto['error']) and ($vetor_foto['size'] <= 500000) and ($vetor_tipo_2 = "image/*")){
            $nome = date('y-m-d--h-m-s');
            $nome = md5($nome); 
            $nome_arquivo = $nome.$vetor_extensao;
            
            move_uploaded_file($vetor_foto['tmp_name'],'img/'.$nome_arquivo);
            return $nome_arquivo;
        }else{
            return 0;
        }
    }
?>