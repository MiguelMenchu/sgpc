<?php
	session_start();
	include 'controlador.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<title>Cartera Nueva</title>

<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>    
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
    
	
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/base/jquery-ui.css" />


<!--PQ Grid files-->
    <link rel="stylesheet" href="pqgrid.min.css" />
    <script src="pqgrid.min.js"></script>
<!--PQ Grid Office theme-->
    <link rel="stylesheet" href="grid/themes/office/pqgrid.css" />

	



	  <script type="text/javascript">
            $(document).ready(function () {              
                var countries = new Array("200","100");
                $("#input").jqxInput({placeHolder: "Clientes Iniciales", height: 25, width: 200, minLength: 1,  source: countries });
            });
        </script>

   




	<style type="text/css">
	#grid_array{
		display: none;
	}
	</style>



</head>
<body>

	<div class="container">
		<div class="row bg-success">
			<div class="col-xs-8"> <br> <br>
				<p>
					<h1 class="text-center">Registrar Carteras<br>
						<small>Presupueste los programas para el anio 2014</small>
					</h1>
				</p>
			</div>
			<div class="col-xs-4">
				<?php asesor($_SESSION["passwordasesor"]);?> <br>
				<table class="table table-striped">
					<tr><td><p>Asesor:</p></td><td><?php datosasesor("Nombreasesor");?></td>
					</tr>
					<tr><td>Agencia</td><td><?php datosasesor("Nombreagencia");?></td>
					</tr>
					<tr><td>Direccion</td><td><?php datosasesor("Direccionagencia");?></td>
					</tr>
					<tr><td>Region</td><td><?php datosasesor("Nombreregion");?></td>
					</tr>
				</table>
			</div>
		</div>
		<hr>
	</div>
	<div class="row">
		<form action="controlador.php" role="form" method="POST">
			<div class="col-xs-3 bg-info">
				<div class="form-froup">
					<select class="form-control" name="programa" id="tipoprograma" onchange="cargar()">
					  <option value="1">Agricola</option>
					  <option value="2">Vivienda</option>
					  <option value="3">Construccion</option>
					  <option value="4">Negocios</option>
					  <option value="5">Prestamo a mujeres</option>
					  <option value="0" selected="selected" >Selecciones un programa</option>
					</select>
				</div>
			</div>
			<div class="col-xs-3 bg-info">
				
			</div>
			<div class="col-xs-3 bg-info"></div>
			<div class="col-xs-3 bg-info"></div>
	</div>

	<div class="row">
			<div class="col-xs-12">

				<div id="grid_array" style="margin:100px;">
					<input type="text" id="input"/>
				</div>
	<div class="container">		

	</div>
	</div>
	</div>
	
			<br>
				<br>
				<div class="container">
					<div class="col-xs-4"></div>
					<div class="col-xs-4">
						<button type="submit" class="btn btn btn-success btn-lg btn-block">Guardar Cartera</button>
					</div>
					<div class="col-xs-4"></div>
				</div>
		</form>
		<div class="container">
		<div id="midiv"></div>
		</div>
	
			
	</div>

	
	<div id="editable"></div>



	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>