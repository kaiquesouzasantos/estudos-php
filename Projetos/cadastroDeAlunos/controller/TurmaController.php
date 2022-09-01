<?php
    require("../dao/TurmaDAO.php");

    class TurmaController{
        public static function getTurmas(){
            return TurmaDAO::getTurmas();    
        }
    }
?>