<?php

require_once "../../db/Conexion.php";

class CiudadModel
{
    private $id;
    private $nombre;    
    private $codigo;   
    private $idDepartamento;

    public static function getCiudades($idDepartamento)
    {
        $query = "SELECT * FROM ciudad WHERE idDepartamento = :idDepartamento";

        $resultado = Conexion::conectar()->prepare($query);

        $resultado->bindParam(":idDepartamento", $idDepartamento);

        $resultado->execute();

        $ciudades = $resultado->fetchAll();

        return $ciudades;
    }

}

?>