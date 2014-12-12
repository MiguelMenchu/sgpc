<?php
	session_start();
	include 'controlador.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cartera Nueva</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/funciones.js"></script>


	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/base/jquery-ui.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>    
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<!--PQ Grid files-->
    <link rel="stylesheet" href="pqgrid.min.css" />
    <script src="pqgrid.min.js"></script>
<!--PQ Grid Office theme-->
    <link rel="stylesheet" href="grid/themes/office/pqgrid.css" />

    <script>
    $(function () {
        var data = [[, '', '', ''],
            [, '', '', ''],
			[, '', '', ''],
			[, '', '', ''],
			[, '', '', ''],
			[, '', '', ''],
			[, '', '', ''],
			[, '', '', ''],
			[, '', '', ''],
			[, '', '', ''],
			[, '', '', ''],
			[, '', '', ''],
			[, '', '', ''],
			[, '', '', '']];


        var obj = { width: 975, height: 447, title: "Operaciones del anio 2015", align: "center",resizable:false,draggable:true };
        obj.colModel = [{ title: "Saldos", width: 75, dataType: "integer" },
        { title: "Crecimiento Mensual", width: 75, dataType: "integer" },
        { title: "Total Casos", width: 75, dataType: "integer", align: "center" },
        { title: "Nuevos", width: 75, dataType: "integer", align: "center"},
        { title: "Recreditos", width: 75, dataType: "integer", align: "center" },
        { title: "Retiros", width: 75, dataType: "integer", align: "center"},
        { title: "Saldo Nuevos", width: 75, dataType: "integer", align: "center"},
        { title: "saldo Recurrentes", width: 75, dataType: "integer", align: "center"},
        { title: "Saldos", width: 75, dataType: "integer", align: "center"},
        { title: "Desembolsos", width: 75, dataType: "integer", align: "center"},
        { title: "Recuperacion", width: 75, dataType: "integet", align: "center"},
        { title: "Crecimiento Mensual", width: 75, dataType: "integer", align: "center"}];
        obj.dataModel = { data: data };
        $("#grid_array").pqGrid(obj);

    });
        
	</script>    




	<style type="text/css">
	#clientes {
		display: none;
	}
	</style>
	<style type="text/css">
	#visualiza {
		display: none;
	}
	</style>
	<style type="text/css">
	#clientesrecurrentes{
		display: none;
	}
	</style>
	<style type="text/css">
	#disercionclientes{
		display: none;
	}
	</style>
	<style type="text/css">
	#agricola{
		display: none;
	}
	</style>
	<style type="text/css">
	#clientesagricola{
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
					<select class="form-control" name="programa" id="tipoprograma" onchange="prog()">
					  <option value="1">Agricola</option>
					  <option value="2">Vivienda</option>
					  <option value="3">Construccion</option>
					  <option value="4">Negocios</option>
					  <option value="5">Prestamo a mujeres</option>
					  <option value="0" selected="selected" >Selecciones un programa</option>
					</select>
				</div>
			</div>
			<div class="col-xs-9 bg-info"></div>
	</div>

	<div class="row">
			<div class="col-xs-12">
				<div id="grid_array" style="margin:100px;"></div>
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
		
		<div id="grid_array"></div>
			
	</div>

	<p>Hola mundo para provar git</p>
	



	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>