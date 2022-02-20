<?php 
    class Pessoa{
        public $nome;
        public $idade;

        public function Falar(){
            echo($this->nome." de ".$this->idade." acabou de falar<br>");
        }
    }

    $kaique = new Pessoa();
    $kaique->nome = "Kaique";
    $kaique->idade = 16;
    $kaique->Falar();

    var_dump($kaique); // type(variavel)
?>