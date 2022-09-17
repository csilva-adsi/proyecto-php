<?php

include '../../models/CiudadModel.php';

class CiudadController
{
    public static function getCiudades($idDepartamento)
    {
        return CiudadModel::getCiudades($idDepartamento);
    }
}

?>