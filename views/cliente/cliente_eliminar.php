<?php
include "../../controllers/ClienteController.php";

$idCliente = $_GET["idCliente"];

if ( ClienteController::eliminarCliente($idCliente)){
    $mensaje = "Se eliminĂ³ correctamente";
 
 }else{
    $mensaje =  "Error al eliminar el cliente";
 }

 header("location:clientes.php?mensaje=".$mensaje);


?>