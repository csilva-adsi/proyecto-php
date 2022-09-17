<?php
include "../../controllers/ClienteController.php";

$idCliente = $_GET["idCliente"];

if ( ClienteController::eliminarCliente($idCliente)){
    $mensaje = "Se eliminó correctamente";
 
 }else{
    $mensaje =  "Error al eliminar el cliente";
 }

 header("location:clientes.php?mensaje=".$mensaje);


?>