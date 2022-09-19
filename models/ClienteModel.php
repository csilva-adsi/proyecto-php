<?php

require_once "../../db/Conexion.php";

class ClienteModel
{
    private $id;
    private $nombres;    
    private $apellidos;
    private $tipoDocumento;
    private $documento;
    private $fechaNacimiento;
    private $email;    
    private $celular;
    private $direccion;
    private $barrio;
    private $departamento;
    private $ciudad;    
    private $foto;

    public static function getClientes()
    {
        $query = "SELECT * FROM cliente";

        $resultado = Conexion::conectar()->prepare($query);

        $resultado->execute();

        $clientes = $resultado->fetchAll();

        return $clientes;
    }

    public static function crearCliente($nombres, $apellidos, $tipoDocumento, $documento, $celular, $email, $direccion, $barrio, $fechaNacimiento, $departamento, $ciudad, $foto)
    {        
            $query = "INSERT INTO cliente(cliNombres, cliApellidos, cliTipoDocumento, cliDocumento, cliFechaNacimiento, cliCelular, cliEmail, cliDireccion, cliBarrio, cliDepartamento, cliCiudad, cliFoto) VALUES (:nombres, :apellidos, :tipoDocumento, :documento, :fechaNacimiento, :celular, :email, :direccion, :barrio,  :departamento, :ciudad, :foto)";
                
            $resultado = Conexion::conectar()->prepare($query);
            
            $resultado->bindParam(":nombres", $nombres);
            $resultado->bindParam(":apellidos", $apellidos);
            $resultado->bindParam(":tipoDocumento", $tipoDocumento);
            $resultado->bindParam(":documento", $documento);
            $resultado->bindParam(":fechaNacimiento", $fechaNacimiento);
            $resultado->bindParam(":celular", $celular);
            $resultado->bindParam(":email", $email);
            $resultado->bindParam(":direccion", $direccion);
            $resultado->bindParam(":barrio", $barrio);
            $resultado->bindParam(":departamento", $departamento);
            $resultado->bindParam(":ciudad", $ciudad); 
            $resultado->bindParam(":foto", $foto);            
            
            if ($resultado->execute()) {
                return true;
            }
    
            return false;	   
    }

    
    public static function eliminarCliente($id)
    {
        $query = "DELETE FROM cliente WHERE idCliente = :id";

        $resultado = Conexion::conectar()->prepare($query);

        $resultado->bindParam(":id", $id);

        $resultado->execute();

        if ($resultado->execute()) {
            return true;
        }

        return false;
    }

    public static function editarCliente($nombres, $apellidos, $tipoDocumento, $documento, $celular, $email, $direccion, $barrio, $fechaNacimiento, $departamento, $ciudad, $id)
    {
        
            $query = "UPDATE cliente SET cliNombres=:nombres, 
                                         cliApellidos =:apellidos, 
                                         cliTipoDocumento=:tipoDocumento, 
                                         cliDocumento=:documento, 
                                         cliFechaNacimiento=:fechaNacimiento, 
                                         cliEmail=:email, 
                                         cliCelular=:celular, 
                                         cliDireccion=:direccion, 
                                         cliBarrio=:barrio,  
                                         cliDepartamento= :departamento, 
                                         cliCiudad=:ciudad
                                     WHERE idCliente=:id";
            
            $resultado = Conexion::conectar()->prepare($query);
            
            $resultado->bindParam(":nombres", $nombres);
            $resultado->bindParam(":apellidos", $apellidos);
            $resultado->bindParam(":tipoDocumento", $tipoDocumento);
            $resultado->bindParam(":documento", $documento);
            $resultado->bindParam(":fechaNacimiento", $fechaNacimiento);
            $resultado->bindParam(":celular", $celular);
            $resultado->bindParam(":email", $email);
            $resultado->bindParam(":direccion", $direccion);
            $resultado->bindParam(":barrio", $barrio);
            $resultado->bindParam(":departamento", $departamento);
            $resultado->bindParam(":ciudad", $ciudad);
            $resultado->bindParam(":id", $id);

            if ($resultado->execute()) {
                return true;
            }
    
            return false;	
    }

    public static function getClientePorId($id)
    {
        $query = "SELECT * FROM cliente WHERE idCliente = :id";

        $resultado =  Conexion::conectar()->prepare($query);

        $resultado->bindParam(":id", $id);

        $resultado->execute();

        $cliente = $resultado->fetch();


        return $cliente;
    }


}

?>