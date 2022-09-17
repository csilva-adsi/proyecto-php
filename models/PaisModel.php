<?php

require_once "../../db/Conexion.php";

class PaisModel
{
    private $id;
    private $nombre;    
    private $codigo;

    public static function getPaises()
    {
        $query = "SELECT * FROM pais";

        $resultado = Conexion::conectar()->prepare($query);

        $resultado->execute();

        $paises = $resultado->fetchAll();

        return $paises;
    }

}

?>