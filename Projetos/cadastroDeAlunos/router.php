<?php
    spl_autoload_register("carregarClasse");

    function carregarClasse($nomeClasse){
        if(file_exists(__DIR__."/model/".$nomeClasse.".php")){
            require_once(__DIR__."/model/".$nomeClasse.".php");
        }else if(file_exists(__DIR__."/dao/classes/".$nomeClasse.".php")){
            require_once(__DIR__."/dao/classes/".$nomeClasse.".php");
        }else if(file_exists(__DIR__."/dao/connect/".$nomeClasse.".php")){
            require_once(__DIR__."/dao/connect/".$nomeClasse.".php");
        }else if(file_exists(__DIR__."/controller/".$nomeClasse.".php")){
            require_once(__DIR__."/controller/".$nomeClasse.".php");
        }
    }

    function rota($caminho){
        return __DIR__."/".$caminho;
    }
?>