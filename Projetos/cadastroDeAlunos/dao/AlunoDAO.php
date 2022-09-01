<?php
    require_once("../model/Aluno.php");
    require_once("../connect/Conexao.php");

    class AlunoDAO{
        private static function getConexao(){
            return Conexao::getConexao();
        }

        private static function getAluno($turma, $nome, $cpf, $img){
            $aluno = new Aluno($nome, $cpf, $img);
            $aluno->setCodTurma($turma);
            
            return $aluno;
        }

        public static function cadastrar($turma, $nome, $cpf, $img){
            $aluno = self::getAluno($turma, $nome, $cpf, $img);

            $insertAluno = "INSERT INTO tbAluno(codTurma, nomeAluno, cpfAluno, imgAluno) 
                                VALUES (:turma, :nome, :cpf, :img)";
            
            $stmt = self::getConexao()->prepare($insertAluno);
            
            $stmt->bindValue(":turma", $aluno->getCodTurma());
            $stmt->bindValue(":nome", $aluno->getNome());
            $stmt->bindValue(":cpf", $aluno->getCPF());
            $stmt->bindValue(":img", $aluno->getImg());

            $stmt->execute();

            return true;
        }

        public static function listaRegistros(): array {
            $alunos = array();
            $stmt = self::getConexao()->query("SELECT * FROM vwAlunos")->fetchAll();

            foreach($stmt as $aluno){
                $objeto = new Aluno($aluno['nomeAluno'], $aluno['cpfAluno'], $aluno['imgAluno']);
                $objeto->setCodAluno($aluno['codAluno']);
                $objeto->setTurma($aluno['codTurma'], $aluno['nomeTurma']);
                
                array_push($alunos, $objeto);
            }

            return $alunos;
        }
    }
?>

