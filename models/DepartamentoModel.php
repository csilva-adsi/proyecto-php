<?php

require_once "../../db/Conexion.php";

class DepartamentoModel
{
    private $id;
    private $nombre;    
    private $codigo;   
    private $idPais;

    public static function getDepartamentos($idPais)
    {
        $query = "SELECT * FROM departamento WHERE idPais = :idPais";

        $resultado = Conexion::conectar()->prepare($query);

        $resultado->bindParam(":idPais", $idPais);

        $resultado->execute();

        $departamentos = $resultado->fetchAll();

        return $departamentos;
    }

}

?>