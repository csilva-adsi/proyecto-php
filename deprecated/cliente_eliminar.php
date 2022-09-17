<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "proyecto") ;

$idCliente = $_GET['idCliente'];

$sql = "DELETE FROM cliente WHERE idCliente =".$idCliente;

if ( $conn->query($sql) === TRUE ){
    $mensaje = "Se eliminó correctamente";
 
 }else{
    $mensaje =  "Error: " . $conn->error;
 }

 header("location:clientes.php?mensaje=".$mensaje);


?>