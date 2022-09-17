<?php

class Conexion
{

    public static function conectar()
    {
        try {

            $conexion = new PDO("mysql:host=localhost;dbname=proyecto", "root", "");

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conexion;

        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

}

?>