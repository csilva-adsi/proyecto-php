<?php

include "../../controllers/UsuarioController.php";

$email          = $_POST["email"];
$password       = $_POST["password"]; 

$usuario = UsuarioController::validarCredenciales($email, $password);

if($usuario){
    session_start();
    $_SESSION['rol'] = $usuario["usuRol"];
    $_SESSION['nombres'] = $usuario["usuNombres"];
    $_SESSION['apellidos'] = $usuario["usuApellidos"];
    $_SESSION['email'] = $usuario["usuEmail"];
    header("location:../../views/cliente/clientes.php");
}else{
    $mensaje = "Credenciales inválidas";
    header("location:../../index.php?mensaje=".$mensaje);    
}
?>