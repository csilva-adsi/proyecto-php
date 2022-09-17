<?php
	session_start();

	// Valido si existe una sesión creada, es decir si el usuario ingresó credenciales válidas, sino lo envío a que inicie sesión
	if(!isset($_SESSION["rol"]))
	{
	$mensaje = "Debes iniciar sesión";
	header("location:../../index.php?mensaje=".$mensaje);
	}else{
		//Si el usuario tiene credenciales validas, capturo el rol que tiene asignado
		$rol = $_SESSION["rol"];

		//Valido si el rol corresponde a ADMIN y sino lo debo enviar a una página pública o la pagina de inicio o login
		if($rol!="ADMIN"){
			$mensaje = "No tienes privilegios para ver esta página";
			header("location:../../index.php?mensaje=".$mensaje);
		}
	}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" charset="text/html; UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Proyecto</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
		<!-- Libreria Jquery-->		
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

		<!-- Libreria Datatable -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.css"/>
 
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

	</head>
	<body>    

	<!-- header -->
		<header style="background-image: url(../../assets/images/header.jpg)">
			
			<!-- Encabezado -->
			<div class="container-fluid ">
			
				<div class="row text-end">
					
					<div class="col-12">
						<div class="dropdown">
							<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
								<img src="../../assets/images/foto.jpg" class="rounded-circle" style="width:30px"></img>
							</button>
							<form action="../../views/usuario/usuario_logout.php" class="dropdown-menu p-4">
								<div class="mb-3">
								<?php echo $_SESSION['nombres']." ".$_SESSION['apellidos'] ?><br>
								<?php echo $_SESSION['email'] ?>
								</div>
								<button type="submit" class="btn btn-primary btn-sm">Cerrar sesión</button>
							</form>
						</div>
					</div>
				</div>
			
				<div class="row align-items-center">
				
					<div class="col-md-3 text-sm-top text-center">
						<img src="../../assets/images/logo.png"></img>
					</div>
					
					<div class="col-md-8 text-sm-end text-center text-white">
						 
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