<?php

include '../../models/DepartamentoModel.php';

class DepartamentoController
{
    public static function getDepartamentos($idPais)
    {
        return DepartamentoModel::getDepartamentos($idPais);
    }
}

?>