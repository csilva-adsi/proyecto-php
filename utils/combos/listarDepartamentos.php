<?php

include '../../controllers/DepartamentoController.php';

$idPais = $_GET["idPais"];

$departamentos = DepartamentoController::getDepartamentos($idPais);

    foreach($departamentos as $registro){
    ?>
        <option value="<?php echo $registro['idDepartamento'] ?>"><?php echo $registro['depNombre'] ?></option>
    <?php
    }
										  


?>