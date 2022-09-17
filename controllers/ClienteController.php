<?php

include '../../models/ClienteModel.php';

class ClienteController
{
    public static function getClientes()
    {
        return ClienteModel::getClientes();
    }

    public static function crearCliente($nombres, $apellidos, $tipoDocumento, $documento, $celular, $email, $direccion, $barrio, $fechaNacimiento, $departamento, $ciudad)
    {
        return ClienteModel::crearCliente($nombres, $apellidos, $tipoDocumento, $documento, $celular, $email, $direccion, $barrio, $fechaNacimiento, $departamento, $ciudad);
    }

    public static function eliminarCliente($id)
    {
        return ClienteModel::eliminarCliente($id);
    }

    public static function editarCliente($nombres, $apellidos, $tipoDocumento, $documento, $celular, $email, $direccion, $barrio, $fechaNacimiento, $departamento, $ciudad, $id)
    {
        return ClienteModel::editarCliente($nombres, $apellidos, $tipoDocumento, $documento, $celular, $email, $direccion, $barrio, $fechaNacimiento, $departamento, $ciudad, $id);
    }
    
    public static function getClientePorId($id)
    {
        return ClienteModel::getClientePorId($id);
    }

}

?>