<?php

include '../../controllers/CiudadController.php';

$idDepartamento = $_GET["idDepartamento"];

$ciudades = CiudadController::getCiudades($idDepartamento);

    foreach($ciudades as $registro){
    ?>
        <option value="<?php echo $registro['idCiudad'] ?>"><?php echo $registro['ciuNombre'] ?></option>
    <?php
    }
										  


?>