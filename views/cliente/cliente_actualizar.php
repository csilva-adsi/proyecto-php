<?php

include "../../controllers/ClienteController.php";

$nombres         = $_POST["nombres"];
$apellidos       = $_POST["apellidos"];        
$tipoDocumento   = $_POST["tipoDocumento"];
$documento       = $_POST["documento"];
$celular         = $_POST["celular"];        
$email           = $_POST["email"];
$direccion       = $_POST["direccion"];        
$barrio          = $_POST["barrio"];
$fechaNacimiento = $_POST["fechaNacimiento"];
$departamento    = $_POST["departamento"];        
$ciudad          = $_POST["ciudad"];       
$id              = $_POST["idCliente"];

$respuesta = ClienteController::editarCliente($nombres, $apellidos, $tipoDocumento, $documento, $celular, $email, $direccion, $barrio, $fechaNacimiento, $departamento, $ciudad, $id);

if($respuesta){
    $mensaje = "Se actualizó el cliente correctamente";
}else{
    $mensaje = "Error al actualizar el cliente";
}

header("location:clientes.php?mensaje=".$mensaje);
?>
           

 
