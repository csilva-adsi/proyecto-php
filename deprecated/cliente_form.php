<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	</head>
	<body>
	<!-- header -->
		<header style="background-image: url(header.jpg)">
			
			<!-- Encabezado -->
			<div class="container-fluid ">
			
				<div class="row align-items-center">
				
					<div class="col-md-3 text-sm-top text-center">
						<img src="logo.png"></img>
					</div>
					
					<div class="col-md-9 text-sm-end text-center text-white">
						 
						 <h1>Mi empresa</h1>
						 <h5>La mejor empresa del mundo</h5>
					
					</div>
				
				</div>
			</div>
			
			<!-- Menu -->
			
			<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
				  <div class="container-fluid">
					<a class="navbar-brand" href="#">Mi Empresa</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					  <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
						<li class="nav-item">
						  <a class="nav-link active" aria-current="page" href="#">Inicio</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#">Servicios</a>
						</li>
						<li class="nav-item dropdown">
						  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Productos
						  </a>
						  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Producto 1</a></li>
							<li><a class="dropdown-item" href="#">Producto 2</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Producto 3</a></li>
						  </ul>
						</li>
						<li class="nav-item">
						  <a class="nav-link">Contáctenos</a>
						</li>
					  </ul>
					  <form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					  </form>
					</div>
				  </div>
				</nav>	
		</header>

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
								<div class="col-sm-6">
									<!-- Campo Departamento -->
									  <div class="mb-3">
										<label for="departamento" class="form-label">Departamento</label>
										<select class="form-select" id="departamento" name="departamento" aria-label="Default select example" required>
										  <option selected disabled value="">Seleccione un valor</option>
										  <option value="1">Antioquia</option>
										  <option value="2">Valle</option>
										  <option value="3">Cundinamarca</option>
										  <option value="4">Santander</option>
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
										<select class="form-select" id="ciudad" name="ciudad" aria-label="Default select example" required>
										  <option selected disabled value="">Seleccione un valor</option>
										  <option value="1">Medellin</option>
										  <option value="2">Cali</option>
										  <option value="3">Bogota</option>
										  <option value="4">Bucaramanga</option>
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
		<!-- Footer -->
		<footer class="bg-dark text-white">
			<br>
			<div class="container">
				<div class="row">
				    <!-- Productos y servicios -->
					<div class="col-sm-4">
						<h4>Servicios</h4>
						<ul class="list-unstyled">
							<li>Consultoria</li>
							<li>Diseño web</li>
							<li>Desarrollo a la medida</li>
							<li>Auditoria</li>
							<li>Capacitaciones</li>
						</ul>
					
					</div>
					<!-- Informaciòn de contacto -->
					<div class="col-sm-4">
					
						<h4>Información de contacto</h4>
						<ul class="list-unstyled">
							<li>Bogotá - Colombia</li>
							<li>Calle 72 # 7-90, Barrio Chapinero</li>
							<li>Mi edificio</li>
							<li>Telefonos: (6) 12344556 - (6) 1231241</li>
							<li>Email: miemail@miempresa.com</li>
						</ul>
					</div>
					<!-- Redes Sociales -->
					<div class="col-sm-4">
					
					<h4>Redes Sociales</h4>
						<ul class="list-unstyled">
							<li><i class="bi bi-facebook"></i> @Miempresa</li>
							<li><i class="bi bi-instagram"></i> @Miempresa</li>
							<li><i class="bi bi-youtube"></i> @Miempresa</li>
							<li><i class="bi bi-linkedin"></i> @Miempresa</li>
							<li><i class="bi bi-twitter"></i> @Miempresa</li>
						</ul>
					</div>
				
				
				</div>
			</div>
			
		</footer>
	<script>
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
	</script>
	
	</body>
</html>