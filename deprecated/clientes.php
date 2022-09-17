<html>
	<head>
		<title>Clientes</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
		
		<script>
			function confirmarEliminacion(url){
				if(confirm("¿Desea eliminar el cliente?")){
					window.location.href = url;
				}
			}
		</script>
	</head>
	<body>
    
    <?php
    // Conexión a la base de datos
    $conn = new mysqli("localhost", "root", "", "proyecto" ) ;

    if( $conn->connect_errno) {
        //echo "Falla al conectarse a Mysql (". $conn->connect_errno .") " .
        $conn->connect_error ;
     } /*else {
        echo $conn->host_info. "\n" ;
     } ; */

     $registros = $conn->query("SELECT * FROM cliente");

    ?>


	<!-- header -->
		<header style="background-image: url(header.jpg)">
			
			<!-- Encabezado -->
			<div class="container-fluid ">
			
				<div class="row align-items-center">
				
					<div class="col-md-3 text-sm-top text-center">
						<img src="logo.png"></img>
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
		
		
	<!--Contenido Principal -->
		<div class="container">
			  <br>
			  <h1>Lista de Clientes</h1>
			  <hr>
			  <?php
					if(isset($_GET['mensaje']))
					{
						$mensaje = $_GET["mensaje"];
				 ?>

						<div class="alert alert-success" role="alert">
							<?php echo $mensaje ?>
						</div>
				 <?php
					}				  
				 ?>
			  <br>
			  <div class="row">
				<div class="col-1">
				  
				</div>
				<div class="col-12">
				   <div class="text-top">
					 <a href="cliente_form.php" class="btn btn-primary btn-sm">Crear cliente</a>	
				   </div>
				   <br>
				  <table class="table  table-striped table-hover">
						<tr>
							<th>Documento</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Celular</th>
							<th>Email</th>
							<th>Fecha Nacimiento</th>
							<th>Acciones</th>
						</tr>
                        <?php

                            while($cliente = $registros->fetch_assoc()){

                        ?>
                                <tr>
                                    <td><?php echo $cliente["cliDocumento"] ?></td>
                                    <td><?php echo $cliente["cliNombres"] ?></td>
                                    <td><?php echo $cliente["cliApellidos"] ?></td>
                                    <td><?php echo $cliente["cliCelular"] ?></td>
                                    <td><?php echo $cliente["cliEmail"] ?></td>
                                    <td><?php echo $cliente["cliFechaNacimiento"] ?></td>
                                    <td>
									<a href="cliente_detalle.php?idCliente=<?php echo $cliente['idCliente']  ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"> Ver</i></a>
                                        <a href="cliente_editar.php?idCliente=<?php echo $cliente['idCliente']  ?>" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"> Editar</i></a>
                                        <a href="javascript:confirmarEliminacion('cliente_eliminar.php?idCliente=<?php echo $cliente['idCliente'] ?>')" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"> Eliminar</i></a>
                                    </td>
                                </tr>



                        <?php

                                

                            }

                        ?>
						
					</table>
				</div>
				<div class="col-1">
				  
				</div>
			  </div>
		</div>
		<br>
			
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
		
		
	</body>
</html>