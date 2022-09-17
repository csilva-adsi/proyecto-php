<?php

 include '../../template/header.php';
 include '../../controllers/PaisController.php';

 $paises = PaisController::getPaises();

 

 ?>

    <!-- Contenido principal -->
	<div class="container">

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
			<li class="breadcrumb-item"><a href="clientes.php">Clientes</a></li>
			<li class="breadcrumb-item active" aria-current="page">Crear cliente</li>
		</ol>
	</nav>
	
		<div class="row">
		
			<!-- Formulario de creación clientes -->
			<div class="col-md-9">
			     <br>
				 <h3>Registrar Cliente</h3>
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
				 

				 <form action ="cliente_registrar.php" method="POST" role="form" class="needs-validation" novalidate>
				 
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
									<input type="text" class="form-control" id="nombres" name="nombres" minlength="3" maxlength="30" pattern="^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$" required>
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
									<input type="text" class="form-control" id="apellidos" name="apellidos" minlength="3" maxlength="30" required>
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
								<select class="form-select" id="tipoDocumento" name="tipoDocumento" aria-label="Default select example" required>
								  <option selected disabled value="">Seleccione un valor</option>
								  <option value="1">CC</option>
								  <option value="2">CE</option>
								  <option value="3">Pasaporte</option>
								  <option value="4">TI</option>
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
									<input type="number" class="form-control" id="documento" name="documento" required>									
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
								<input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
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
										<input type="text" class="form-control" id="direccion" name="direccion" minlength="10" required>
										<div class="invalid-feedback">
											Ingrese la dirección del cliente. Minimo 10 caracteres
									</div>
									  </div>
								</div>
								<div class="col-sm-6">
									<!-- Campo Barrio -->
									  <div class="mb-3">
										<label for="barrio" class="form-label">Barrio</label>
										<input type="text" class="form-control" id="barrio" name="barrio" required>
										<div class="invalid-feedback">
											Ingrese el barrio del cliente
									</div>
									  </div>
								</div>
						   </div>
						   
						   <div class="row">
							
						   		<div class="col-sm-4">
									<!-- Campo Pais -->
									  <div class="mb-3">
										<label for="pais" class="form-label">Pais</label>
										<select class="form-select" id="pais" name="pais" aria-label="Default select example" required>
										  <option selected disabled value="">Seleccione un valor</option>
										  <?php 
										  	foreach($paises as $registro){
											?>
												<option value="<?php echo $registro['idPais'] ?>"><?php echo $registro['paisNombre'] ?></option>
											<?php
											}
										  ?>								 
										  
										</select>
										<div class="invalid-feedback">
											Seleccione un pais
										</div>
									  </div>
								</div>
								<div class="col-sm-4">
									<!-- Campo Departamento -->
									  <div class="mb-3">
										<label for="departamento" class="form-label">Departamento</label>
										<select class="form-select" id="departamento" name="departamento" aria-label="Default select example" required>
										  <option selected value="">Seleccione un valor</option>										  
										</select>
										<div class="invalid-feedback">
											Seleccione un departamento
										</div>
									  </div>
								</div>
								<div class="col-sm-4">
									<!-- Campo Ciudad -->
									  <div class="mb-3">
										<label for="ciudad" class="form-label">Ciudad</label>
										<select class="form-select" id="ciudad" name="ciudad" aria-label="Default select example" required>
										  <option selected value="">Seleccione un valor</option>
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
										<input type="number" class="form-control" id="celular" name="celular" required>
										<div class="invalid-feedback">
											Ingrese el celular del cliente
										</div>
									  </div>	  
					
								</div>
								<div class="col-sm-6">
									<!-- Campo Email -->
								  <div class="mb-3">
									<label for="email" class="form-label">Email</label>
									<input type="email" class="form-control" id="email" name="email" required pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
									<div class="invalid-feedback">
											Ingrese el email del cliente
									</div>
								  </div>
								</div>
						   </div>
					</div> 			
				
				  <div class="text-center">
					<button type="submit" class="btn btn-danger">Guardar</button>
				  </div>
				</form>
			
			</div>
				
		</div>
		
	  </div>
	
	</div>
             <div class="col-md-3">	
					<br>
					<h5 class="text-center">Administrador</h5>
				   <ul class="nav flex-column">
						  <li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Clientes</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="#">Productos</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="#">Proveedores</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link"  href="#">Reportes</a>
						  </li>
						</ul>
			 </div>	
			 
  </div>
  </div>
	<br>
	<script>

     //Validaciones bootstrap
	 // Example starter JavaScript for disabling form submissions if there are invalid fields
		(() => {
		  'use strict'

		  // Fetch all the forms we want to apply custom Bootstrap validation styles to
		  const forms = document.querySelectorAll('.needs-validation')

		  // Loop over them and prevent submission
		  Array.from(forms).forEach(form => {
			form.addEventListener('submit', event => {
			  if (!form.checkValidity()) {
				event.preventDefault()
				event.stopPropagation()
			  }

			  form.classList.add('was-validated')
			}, false)
		  })
		})()

	   // Combos dependientes con JQuery
	   $(document).ready(function(){ 	

			$("#pais").change( function(){

				document.getElementById("departamento").options.length=1;
				document.getElementById("ciudad").options.length=1;
				listarDepartamentos();
			} ); 

			$("#departamento").change( function(){

				document.getElementById("ciudad").options.length=1;
				listarCiudades();
			} ); 



		});


		function listarDepartamentos(){

			var idPais = $("#pais").val();

			$.get("../../utils/combos/listarDepartamentos.php",{ idPais: idPais },
			
				function(resultado){

					$("#departamento").append(resultado);

				}			
			);
		}


		function listarCiudades(){

			var idDepartamento = $("#departamento").val();

			$.get("../../utils/combos/listarCiudades.php",{ idDepartamento: idDepartamento },

				function(resultado){

					$("#ciudad").append(resultado);

				}			
			);
		}





	</script>
<?php

	include '../../template/footer.php';

?>