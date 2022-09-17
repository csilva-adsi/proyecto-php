<?php

require_once "../../db/Conexion.php";

class UsuarioModel 
{    
    private $id;
    private $nombres;    
    private $apellidos;
    private $email;    
    private $celular;
    private $password;
    private $rol;

    public static function validarCredenciales($email, $password)
    {
        $query = "SELECT * FROM usuario WHERE usuEmail = :email AND usuPassword = :password";

        $resultado =  Conexion::conectar()->prepare($query);

        $resultado->bindParam(":email", $email);
        $resultado->bindParam(":password", $password);

        $resultado->execute();

        $usuario = $resultado->fetch();

        return $usuario;
    }

}

?>