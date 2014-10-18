<?php
	@session_start();
	error_reporting(E_ERROR | E_PARSE | E_NOTICE);
	include 'controlador.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Servicios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/funciones.js"></script>
	
</head>
<body>
	<div class="container">
		<div class="panel">
			<div class="panel-defautl">
				<div class="col-xs-4">
				</div>
				<div class="col-xs-4">
					<div class="panel-body">
						<h1>Carteras</h1>
					</div>
				</div>
				<div class="col-xs-4">
					<?php asesor($_SESSION["passwordasesor"]);?> <br>
				<table class="table table-striped">
					<tr>
						<td><p>
						Asesor: 
					</p></td>
						<td><?php datosasesor("Nombreasesor");?></td>
					</tr>
					<tr>
						<td>Agencia</td>
						<td><?php datosasesor("Nombreagencia");?></td>
					</tr>
					<tr>
						<td>Direccion</td>
						<td><?php datosasesor("Direccionagencia");?></td>
					</tr>
					<tr>
						<td>Region</td>
						<td><?php datosasesor("Nombreregion");?></td>
					</tr>
				</table>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
<br>
		<div class="row">
			<div class="col-xs-4">
				<button type="button" class="btn btn-success btn-lg btn-block" onclick="window.location.href='carteranueva.php'">Crear Cartera Nuevaaa</button>	
			</div>
			<div class="col-xs-4">
				<p class="lead">
				<button type="button" class="btn btn-success btn-lg btn-block">Crear Cartera Recurrente</button>	
			</p>
			</div>
			<div class="col-xs-4">
				<button type="button" class="btn btn-success btn-lg btn-block">Registrar Diserciones</button>	
			</div>
		</div>
	</div>

	

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>