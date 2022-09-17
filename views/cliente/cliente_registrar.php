<?php

include '../../controllers/ClienteController.php';

// Capturar los datos que vienen del formulario
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


$respuesta = ClienteController::crearCliente($nombres, $apellidos, $tipoDocumento, $documento, $celular, $email, $direccion, $barrio, $fechaNacimiento, $departamento, $ciudad);


   if ($respuesta){
      $mensaje = "Se regisró correctamente";
      $resultado = true;

   }else{
      $mensaje =  "Error al registrar el cliente ";
      $resultado = false;
   }

   if($resultado){
      header("location:clientes.php?mensaje=".$mensaje);
   }else{
      header("location:cliente_crear.php?error=".$mensaje);
   }


 


?>