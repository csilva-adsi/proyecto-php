<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mi Proyecto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row  align-items-center">
			<div class="col-md-6 d-none d-sm-block">
				<img src="./assets/images/login.jpg" class="img-fluid"></img>
			</div>
			<div class="col-md-6">
				<div class="card">
					<br>
					<div class="col text-center">
						<img src="./assets/images/logo.png" class="img-fluid"></img>
					</div>
					<!--h3 class="text-center">Bienvenido(a)</h3-->
					<div class="card-body">
						<form action="./views/usuario/usuario_validar.php" method="post" role="form" class="needs-validation" novalidate>
							<?php
								if(isset($_GET['mensaje']))
								{
									$mensaje = $_GET["mensaje"];
							?>

									<div class="alert alert-danger" role="alert">
										<?php echo $mensaje ?>
									</div>
							<?php
								}				  
							?>
							<div class="mb-3">
								<label for="email" class="form-label">Usuario</label>
								<input type="email" name="email" class="form-control" id="email" required>
								<div class="invalid-feedback">
										Ingrese el Usuario
								</div>
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Password</label>
								<input type="password" name="password" class="form-control" id="password" required>
								<div class="invalid-feedback">
										Ingrese el Password
								</div>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Ingresar</button>
								<br><br>
								<a href="">Registrarse</a>&nbsp; &nbsp; &nbsp; <a href="">Olvidé contraseña</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

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