<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "proyecto") ;

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
$idCliente       = $_POST["idCliente"];

$sql="UPDATE cliente SET cliNombres         = '".$nombres."',
                         cliApellidos       = '".$apellidos."',
                         cliTipoDocumento   = '".$tipoDocumento."',
                         cliDocumento       = '".$documento."',
                         cliCelular         = '".$celular."',
                         cliEmail           = '".$email."',
                         cliDireccion       = '".$direccion."',
                         cliBarrio          = '".$barrio."',
                         cliFechaNacimiento = '".$fechaNacimiento."',
                         cliDepartamento    = '".$departamento."',
                         cliCiudad          = '".$ciudad."'   
                      WHERE idCliente = '$idCliente'";

if ( $conn->query($sql) === TRUE ){
    $mensaje = "Se actualizó correctamente";

}else{
    $mensaje =  "Error: " . $conn->error;
}

header("location:clientes.php?mensaje=".$mensaje);


?>