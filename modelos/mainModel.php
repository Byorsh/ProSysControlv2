<?php

    if($peticionAjax){
        require_once "../config/SERVER.php";

    }else{
        require_once "./config/SERVER.php";

    }

    class mainModel{
        /*--------- Funcion para conectar a la BD ---------*/

        protected static function conectar(){
            $conexion = new PDO(SGBD, USER, PASS);
            $conexion -> exec("SET CHARACTER SET utf8");

            return $conexion;
            
        }
    }
