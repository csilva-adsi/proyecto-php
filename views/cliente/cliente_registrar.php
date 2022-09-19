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

//Paso 1: Obtienes el Nombre del archivo
$foto = $_FILES["foto"]["name"]; 
//Paso 2: Obtienes la Ruta temporal a donde se carga el archivo 
$url_temporal = $_FILES["foto"]["tmp_name"]; 
//y le indicas las carpeta donde subiremos nuestros archivos, se crea una carpeta por cada cedula de cada cliente
$url_base = "./documentos/".$documento."/"; 
//Paso 4: Se ajusta la Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
$url_destino = str_replace('\\', '/', $url_base) . '/' . $foto;
//Paso 5: Se valida si la carpeta no existe, si no la creamos
if (!file_exists($url_base)) {
    mkdir($url_base, 0777, true);
};
//Paso 6: movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
move_uploaded_file($url_temporal, $url_destino);

$respuesta = ClienteController::crearCliente($nombres, $apellidos, $tipoDocumento, $documento, $celular, $email, $direccion, $barrio, $fechaNacimiento, $departamento, $ciudad, $foto);

   if ($respuesta){
      $mensaje = "Se registró correctamente";
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