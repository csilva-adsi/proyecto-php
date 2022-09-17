<?php

include '../../models/UsuarioModel.php';

class UsuarioController
{
    public static function validarCredenciales($email, $password)
    {
        return UsuarioModel::validarCredenciales($email, $password);
    }  
}