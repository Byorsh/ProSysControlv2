<?php
    require_once "mainModel.php";

    class usuarioModelo extends mainModel{
        /*---------- Modelo agregar usuario ----------*/
        protected static function agregar_usuario_modelo($datos){
            $sql=mainModel::conectar()->prepare("INSERT INTO usuario(rfc,nombre,apellido,telefono
            direccion,email,usuario,contrasenia,estado,privilegio) 
            VALUES (:RFC, :Nombre, :Apellido, :Telefono, :Direccion, :Email, :Usuario, 
            :Contrasenia, :Estado, :Privilegio)");

            $sql->bindParam(":RFC",$datos['RFC']);
            $sql->bindParam(":Nombre",$datos['Nombre']);
            $sql->bindParam(":Apellido",$datos['Apellido']);
            $sql->bindParam(":Telefono",$datos['Telefono']);
            $sql->bindParam(":Direccion",$datos['Direccion']);
            $sql->bindParam(":Email",$datos['Email']);
            $sql->bindParam(":Usuario",$datos['Usuario']);
            $sql->bindParam(":Contrasenia",$datos['Contrasenia']);
            $sql->bindParam(":Estado",$datos['Estado']);
            $sql->bindParam(":Privilegio",$datos['Privilegio']);
            $sql->execute();
            
            return $sql;
        }

    }