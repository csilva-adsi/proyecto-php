<?php

 include '../../template/header.php';
 include '../../controllers/ClienteController.php';

 $clientes = ClienteController::getClientes();

?>
		
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
					 <a href="cliente_crear.php" class="btn btn-primary btn-sm">Crear cliente</a>	
				   </div>
				   <br>
				  <table class="table  table-striped table-hover" id="example">
					 <thead>
						<tr>
							<th>Documento</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Celular</th>
							<th>Email</th>
							<th>Fecha Nacimiento</th>
							<th>Acciones</th>
						</tr>
					 </thead>
					 <tbody>
                        <?php

                            foreach($clientes as $cliente){

                        ?>
                                <tr>
                                    <td><?php echo $cliente["cliDocumento"] ?></td>
                                    <td><?php echo $cliente["cliNombres"] ?></td>
                                    <td><?php echo $cliente["cliApellidos"] ?></td>
                                    <td><?php echo $cliente["cliCelular"] ?></td>
                                    <td><?php echo $cliente["cliEmail"] ?></td>
                                    <td><?php echo $cliente["cliFechaNacimiento"] ?></td>
                                    <td>
										<a href="cliente_ver.php?idCliente=<?php echo $cliente["idCliente"] ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"> Ver</i></a>
                                        <a href="cliente_editar.php?idCliente=<?php echo $cliente['idCliente']?>" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"> Editar</i></a>
                                        <a href="javascript:confirmarEliminacion('cliente_eliminar.php?idCliente=<?php echo $cliente['idCliente'] ?>')" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"> Eliminar</i></a>
                                    </td>
                                </tr>
                        <?php                                

                            }

                        ?>
						</tbody>
						
					</table>
				</div>
				<div class="col-1">
				  
				</div>
			  </div>
		</div>
		<br>
		<script>
		//Confirmar eliminar Cliente		
			function confirmarEliminacion(url){
				if(confirm("¿Desea eliminar el cliente?")){
					window.location.href = url;
				}
			}
		
		//Exportar datos de la tabla a diferentes formatos
		$(document).ready(function () {
				$('#example').DataTable(
					{ 
						language: {
									lengthMenu: "Mostrar _MENU_ registros",
									zeroRecords: "No se encontraron resultados",
									info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
									infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
									infoFiltered: "(Filtrando de un total de _MAX_ registros)",
									sSearch: "Buscar:",
									oPaginate: {
										sFirst: "Primero",
										sLast: "Ultimo",
										sNext: "Siguiente",
										sPrevious: "Anterior"
									},
									sProcessing: "Procesando...",
									},
									
									
					dom: 'Bfrtilp',
					buttons: [
						{
						extend: 'print',
						text: '<i class="bi bi-printer"></i>',
						titleAttr: 'print',
						className: 'btn btn-success btn-md'
						},
						{
					extend: 'excelHtml5',
						text: '<i class="bi bi-file-earmark-excel"></i>',
						titleAttr: 'Excel',
						className: 'btn btn-info btn-md'
						},
						{
						extend: 'csvHtml5',
						text: '<i class="bi bi-filetype-csv"></i>',
						titleAttr: 'CSV',
						className: 'btn btn-warning btn-md'
						},
						{
						extend: 'pdfHtml5',
						text: '<i class="bi bi-filetype-pdf"></i>',
						titleAttr: 'PDF',
						className: 'btn btn-danger btn-md'
						}
					],

				});
			});
		</script>

<?php

	include '../../template/footer.php';

?>		
	