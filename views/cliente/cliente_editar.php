<?php 

    include '../../template/header.php';
    include "../../controllers/ClienteController.php";

    $idCliente = $_GET["idCliente"];

    $cliente = ClienteController::getClientePorId($idCliente);

?>

    <!-- Contenido principal -->
	<div class="container">

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Inicio</a></li>
			<li class="breadcrumb-item"><a href="clientes.php">Clientes</a></li>
			<li class="breadcrumb-item active" aria-current="page">Editar cliente</li>
		</ol>
	</nav>
	
		<div class="row">
		
			<!-- Formulario de creación clientes -->
			<div class="col-md-9">
			     <br>
				 <h3>Editar Cliente</h3>
				 <hr>
				 <?php
					if(isset($_GET['error']))
					{
						$mensaje = $_GET["error"];
				 ?>

						<div class="alert alert-danger" role="alert">
							<?php echo $mensaje ?>
						</div>
				 <?php
					}				  
				 ?>
				 

				 <form action ="cliente_actualizar.php" method="POST" role="form" class="needs-validation" novalidate>
				  <input type="hidden" name="idCliente" value="<?php  echo $cliente["idCliente"] ?>">
				  <div class="row">
				  
					<!-- Datos Basicos -->
					<div class="col-sm-12">
					  <br>
					  <h5>Datos basicos</h5>
				      <hr>
					
						<div class="row">						
							<div class="col-sm-6">
								<!-- Campo Nombres -->
								  <div class="mb-3">
									<label for="nombres" class="form-label">Nombres</label>
									<input type="text" class="form-control" id="nombres" name="nombres" minlength="3" maxlength="30" pattern="^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$" required value="<?php echo $cliente["cliNombres"]?>" <?php if(isset($_GET['accion'])) {?> readonly <?php } ?>>
									<div class="invalid-feedback">
										Ingrese los nombres del cliente
									 </div>
									 <div class="valid-feedback">
									   Muy bien!
									 </div>
								  </div>
							</div>
							<div class="col-sm-6">
								 <!-- Campo Apellidos -->
								  <div class="mb-3">
									<label for="apellidos" class="form-label">Apellidos</label>
									<input type="text" class="form-control" id="apellidos" name="apellidos" minlength="3" maxlength="30" required value="<?php echo $cliente["cliApellidos"]?>" <?php if(isset($_GET['accion'])) {?> readonly <?php } ?>>
									<div class="invalid-feedback">
										Ingrese los apellidos del cliente
									 </div>
								  </div>
							</div>							
						</div>
						<div class="row">
							<div class="col-sm-6">
								<!-- Campo Tipo de documento -->
							  <div class="mb-3">
								<label for="tipoDocumento" class="form-label">Tipo de documento</label>
								<select class="form-select" id="tipoDocumento" name="tipoDocumento" aria-label="Default select example" required <?php if(isset($_GET['accion'])) {?> disabled <?php } ?>>
								  <option selected disabled value="">Seleccione un valor</option>
								  <option value="1"  <?php if( $cliente["cliTipoDocumento"] == '1') { ?> selected  <?php } ?>>CC</option>
								  <option value="2"  <?php if( $cliente["cliTipoDocumento"] == '2') { ?> selected  <?php } ?>>CE</option>
								  <option value="3"  <?php if( $cliente["cliTipoDocumento"] == '3') { ?> selected  <?php } ?>>Pasaporte</option>
								  <option value="4"  <?php if( $cliente["cliTipoDocumento"] == '4') { ?> selected  <?php } ?>>TI</option>
								</select>
								<div class="invalid-feedback">
										Seleccione un tipo de documento
								</div>
							  </div>
							</div>
							<div class="col-sm-6">							
								<!-- Campo documento -->
								  <div class="mb-3">
									<label for="documento" class="form-label">Documento</label>
									<input type="number" class="form-control" id="documento" name="documento" required  value="<?php echo $cliente["cliDocumento"] ?>" <?php if(isset($_GET['accion'])) {?> readonly <?php } ?>>									
									<div class="invalid-feedback">
											Ingrese el documento del cliente
									</div>
								  </div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">	
								<!-- Campo Fecha -->
							  <div class="mb-3">
								<label for="fecha" class="form-label">Fecha nacimiento</label>
								<input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento"  value="<?php echo $cliente["cliFechaNacimiento"]  ?>" <?php if(isset($_GET['accion'])) {?> readonly <?php } ?>>
							  </div>
							</div>					  
						
						</div>				  
					
					
					
					<div class="row">
					
					<!-- Datos de contacto -->
					<div class="col-sm-12">
					
						<!-- Datos de Contacto --> 
						  <br>
						   <h5>Datos de contacto</h5>
						   <hr>
						   
						   
						   <div class="row">
								<div class="col-sm-6">
									<!-- Campo Direccion -->
									  <div class="mb-3">
										<label for="direccion" class="form-label">Direccion</label>
										<input type="text" class="form-control" id="direccion" name="direccion" minlength="10" required  value="<?php echo $cliente["cliDireccion"]  ?>" <?php if(isset($_GET['accion'])) {?> readonly <?php } ?>>
										<div class="invalid-feedback">
											Ingrese la dirección del cliente. Minimo 10 caracteres
									</div>
									  </div>
								</div>
								<div class="col-sm-6">
									<!-- Campo Barrio -->
									  <div class="mb-3">
										<label for="barrio" class="form-label">Barrio</label>
										<input type="text" class="form-control" id="barrio" name="barrio" required  value="<?php echo $cliente["cliBarrio"]  ?>" <?php if(isset($_GET['accion'])) {?> readonly <?php } ?>>
										<div class="invalid-feedback">
											Ingrese el barrio del cliente
									</div>
									  </div>
								</div>
						   </div>
						   
						   <div class="row">
								<div class="col-sm-6">
									<!-- Campo Departamento -->
									  <div class="mb-3">
										<label for="departamento" class="form-label">Departamento</label>
										<select class="form-select" id="departamento" name="departamento" aria-label="Default select example" required <?php if(isset($_GET['accion'])) {?> disabled <?php } ?>>
										  <option selected disabled value="">Seleccione un valor</option>
										  <option value="1" <?php if( $cliente["cliDepartamento"]  == '1') { ?> selected  <?php } ?>>Antioquia</option>
										  <option value="2" <?php if( $cliente["cliDepartamento"]  == '2') { ?> selected  <?php } ?>>Valle</option>
										  <option value="3" <?php if( $cliente["cliDepartamento"]  == '3') { ?> selected  <?php } ?>>Cundinamarca</option>
										  <option value="4" <?php if( $cliente["cliDepartamento"]  == '4') { ?> selected  <?php } ?>>Santander</option>
										</select>
										<div class="invalid-feedback">
											Seleccione un departamento
										</div>
									  </div>
								</div>
								<div class="col-sm-6">
									<!-- Campo Ciudad -->
									  <div class="mb-3">
										<label for="ciudad" class="form-label">Ciudad</label>
										<select class="form-select" id="ciudad" name="ciudad" aria-label="Default select example" required <?php if(isset($_GET['accion'])) {?> disabled <?php } ?>>
										  <option selected disabled value="">Seleccione un valor</option>
										  <option value="1"  <?php if( $cliente["cliCiudad"]  == '1') { ?> selected  <?php } ?>>Medellin</option>
										  <option value="2"  <?php if( $cliente["cliCiudad"]  == '2') { ?> selected  <?php } ?>>Cali</option>
										  <option value="3"  <?php if( $cliente["cliCiudad"]  == '3') { ?> selected  <?php } ?>>Bogota</option>
										  <option value="4"  <?php if( $cliente["cliCiudad"]  == '4') { ?> selected  <?php } ?>>Bucaramanga</option>
										</select>
										<div class="invalid-feedback">
											Seleccione una ciudad
										</div>
									  </div>
								</div>
						   </div>
						   
						   <div class="row">
								<div class="col-sm-6">
									<!-- Campo Celular -->
									  <div class="mb-3">
										<label for="celular" class="form-label">Celular</label>
										<input type="number" class="form-control" id="celular" name="celular" required  value="<?php echo $cliente["cliCelular"]  ?>" <?php if(isset($_GET['accion'])) {?> readonly <?php } ?>>
										<div class="invalid-feedback">
											Ingrese el celular del cliente
										</div>
									  </div>	  
					
								</div>
								<div class="col-sm-6">
									<!-- Campo Email -->
								  <div class="mb-3">
									<label for="email" class="form-label">Email</label>
									<input type="email" class="form-control" id="email" name="email" required pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  value="<?php echo $cliente["cliEmail"]  ?>" <?php if(isset($_GET['accion'])) {?> readonly <?php } ?>>
									<div class="invalid-feedback">
											Ingrese el email del cliente
									</div>
								  </div>
								</div>
						   </div>
					</div> 			
				
				  <div class="text-center">
                  <?php if(isset($_GET['accion'])) {?>
					
                            <a href="cliente_editar.php?idCliente=<?php echo $cliente["idCliente"]   ?>" class="btn btn-success">Editar</a>
                                            

                        <?php } else { ?>
                        <button type="submit" class="btn btn-danger">Guardar</button>
                    <?php } ?>
				  </div>
				</form>
			
			</div>
				
		</div>
		
	  </div>
	
	</div>		 
	<?php include '../../template/menu.php';?> 		 
    </div>
     

</div>
  <br>
  <br>
<?php include '../../template/footer.php';?>
	