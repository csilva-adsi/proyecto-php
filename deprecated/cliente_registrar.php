<?php

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


//Conexion a base de datos

$conn = new mysqli("localhost", "root", "", "proyecto" ) ;

if( $conn->connect_errno) {
    //echo "Falla al conectarse a Mysql (". $conn->connect_errno .") " .
    $conn->connect_error ;
 } /*else {
    echo $conn->host_info. "\n" ;
 } */


 $sql = "INSERT INTO cliente(cliNombres, cliApellidos, cliTipoDocumento,cliDocumento, cliCelular, cliEmail, cliDireccion, cliBarrio, cliFechaNacimiento, cliDepartamento, cliCiudad) 
                 VALUES('".$nombres."','".$apellidos."','".$tipoDocumento."', '". $documento."', '".$celular."','".$email."','".$direccion."','".$barrio."', '".$fechaNacimiento."','".$departamento."','".$ciudad."')";

 //echo $sql;
 
   if ( $conn->query($sql) === TRUE ){
      $mensaje = "Se regisró correctamente";
      $resultado = true;

   }else{
      $mensaje =  "Error: " . $conn->error;
      $resultado = false;
   }

   if($resultado){
      header("location:clientes.php?mensaje=".$mensaje);
   }else{
      header("location:cliente_form.php?error=".$mensaje);
   }


 


?>