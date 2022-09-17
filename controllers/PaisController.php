<?php

include '../../models/PaisModel.php';

class PaisController
{
    public static function getPaises()
    {
        return PaisModel::getPaises();
    }
}

?>