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
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/funciones.js"></script>
	<style type="text/css">
	#presupuestos {
		display: none;
	}
	</style>
	<style type="text/css">
	#opcionclientespecificos {
		display: none;
	}
	</style>
	<style type="text/css">
	#opcionsaldospecificos {
		display: none;
	}
	</style>
	<style type="text/css">
	#saldosgenerales {
		display: none;
	}
	</style>
</head>
<body>
	<div class="container bg-danger" >
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
				<button type="button" class="btn btn-success btn-lg btn-block" onclick="window.location.href='carteranueva.php'">Presupuestar Carteras</button>	
			</div>
			<div class="col-xs-4">
				<p class="lead">
				<button type="button" class="btn btn-success btn-lg btn-block" onclick="document.getElementById('presupuestos').style.display='block'">Ver Carteras Presupuestadas</button>	
			</p>
			</div>
			<div class="col-xs-4">
				<button type="button" class="btn btn-success btn-lg btn-block">Modificar Presupuestos</button>	
			</div>
		</div>
	</div>
	
	<div class="container">
		<div id="presupuestos">
			<div class="row" >
				<div class="col-xs-12 bg-primary">
					<p ><h2 class="text-center">2014</h2></p>
				</div>
			</div> <br> 
			<div class="row">
				<div class="col-xs-3 bg-info"><br>
					<div class="form-froup">
						<select class="form-control" name="tiporeporte" id="tiporeporte">
							<option value="1">Reporte Especifico</option>
							<option value="2">Saldo Especifico</option>
							<option value="3">Reportes Totales</option>
							<option value="4">Saldos Totales</option>
							<option value="5">Reporte total Asesor</option>
							<option value="" selected="selected">Seleccione tipo de reporte</option>
						</select>
						<br>
						<button type="button" class="btn btn-success" onclick="tiporeporte()">Opciones de reporteee</button>
					</div>
				</div>
				<div class="col-xs-9">
				<div id="opcionclientespecificos">
					<div class="row">
					<div class="col-xs-3 ">
						<p class="lead">Programa</p>
						<div class="form-froup">
							<select class="form-control" name="pprograma" id="pprograma">
								<option value="1">Agricola</option>
								<option value="2">Vivienda</option>
								<option value="3">Construccion</option>
								<option value="4">Negocios</option>
								<option value="5">Prestamo Mujeres</option>
								<option value="" selected="selected">Seleccione Programa</option>
							</select>
							<br>
						</div>
					</div>
					<div class="col-xs-3">
						<p class="lead">Tipo Cliente</p>
						<div class="form-froup">
							<select class="form-control" name="ptipocliente" id="ptipocliente">
								<option value="1">Nuevos</option>
								<option value="2">Recurrentes</option>
								<option value="3">Diserciones</option>
								<option value="" selected="selected">Seleccione Tipo de cliente</option>
							</select>
							<br>
						</div>
					</div>
					<div class="col-xs-3"> 
						<p class="lead">Tipo Cliente</p>
						<div class="form-froup">
							<select class="form-control" name="ptipocliente" id="ptipocliente">
								<option value="1">Nuevos</option>
								<option value="2">Recurrentes</option>
								<option value="3">Diserciones</option>
								<option value="" selected="selected">Seleccione Tipo de cliente</option>
							</select>
							<br>
						</div>
					</div>
					<div class="col-xs-3">
						<p class="lead">Tipo Cliente</p>
						<div class="form-froup">
							<select class="form-control" name="ptipocliente" id="ptipocliente">
								<option value="1">Nuevos</option>
								<option value="2">Recurrentes</option>
								<option value="3">Diserciones</option>
								<option value="" selected="selected">Seleccione Tipo de cliente</option>
							</select>
							<br>
						</div>
					</div>
				</div>
					<div class="row"> 
						<div class="col-xs-4">
						
						</div> 
							<div class="col-xs-4">
							<button type="button" class="btn btn-success btn-lg btn-block" onclick="ajaxget()">Ver Clientes</button>		
							</div>
							<div class="col-xs-4"></div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<button type="button" class="btn btn-success" onclick="document.getElementById('opcionclientespecificos').style.display='none'">Continuar</button>
						</div>
						<div class="col-xs-4"></div>
						<div class="col-xs-4">
							
						</div>
					</div>
				</div>	
				


				<div id="opcionsaldospecificos">
					<div class="row">
					<div class="col-xs-3 ">
						<p class="lead">Programa</p>
						<div class="form-froup">
							<select class="form-control" name="pprogramamontos" id="pprogramamontos">
								<option value="1">Agricola</option>
								<option value="2">Vivienda</option>
								<option value="3">Construccion</option>
								<option value="4">Negocios</option>
								<option value="5">Prestamo Mujeres</option>
								<option value="" selected="selected">Seleccione Programa</option>
							</select>
							<br>
						</div>
					</div>
					<div class="col-xs-3">
						<p class="lead">Tipo Cliente</p>
						<div class="form-froup">
							<select class="form-control" name="ptipoclientemontos" id="ptipoclientemontos">
								<option value="1">Nuevos</option>
								<option value="2">Recurrentes</option>
								<option value="3">Diserciones</option>
								<option value="" selected="selected">Seleccione Tipo de cliente</option>
							</select>
							<br>
						</div>
					</div>
					<div class="col-xs-3"> <br> <br>
						<p class="lead"></p>
					</div>
					<div class="col-xs-3"></div>
				</div>
					<div class="row"> 
						<div class="col-xs-4">
						
						</div> 
							<div class="col-xs-4">
							<button type="button" class="btn btn-success btn-lg btn-block" onclick="ajaxgetmontos()">Ver Montos</button>		
							</div>
							<div class="col-xs-4"></div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<button type="button" class="btn btn-success" onclick="document.getElementById('opcionsaldospecificos').style.display='none'">Continuar</button>
						</div>
						<div class="col-xs-4"></div>
						<div class="col-xs-4">
							
						</div>
					</div>
				</div>		
				



				<div id="saldosgenerales">
					<div class="row">
					<div class="col-xs-3 ">
						<p class="lead">Programa</p>
						<div class="form-froup">
							<select class="form-control" name="pprograma" id="pprograma">
								<option value="1">Agricola</option>
								<option value="2">Vivienda</option>
								<option value="3">Construccion</option>
								<option value="4">Negocios</option>
								<option value="5">Prestamo Mujeres</option>
								<option value="" selected="selected">Seleccione Programa</option>
							</select>
							<br>
						</div>
					</div>
					<div class="col-xs-3">
						<p class="lead">Tipo Cliente</p>
						<div class="form-froup">
							<select class="form-control" name="ptipocliente" id="ptipocliente">
								<option value="1">Nuevos</option>
								<option value="2">Recurrentes</option>
								<option value="3">Diserciones</option>
								<option value="" selected="selected">Seleccione Tipo de cliente</option>
							</select>
							<br>
						</div>
					</div>
					<div class="col-xs-3"> <br> <br>
						<p class="lead"></p>
					</div>
					<div class="col-xs-3"></div>
				</div>
					<div class="row"> 
						<div class="col-xs-4">
						
						</div> 
							<div class="col-xs-4">
							<button type="button" class="btn btn-success btn-lg btn-block" onclick="ajaxget()">Ver Presupuesto</button>		
							</div>
							<div class="col-xs-4"></div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<button type="button" class="btn btn-success" onclick="document.getElementById('saldosgenerales').style.display='none'">Continuar</button>
						</div>
						<div class="col-xs-4"></div>
						<div class="col-xs-4">
							
						</div>
					</div>
				</div>





			</div> <br>
		</div>
			</div>
				
			<div class="row">
				<div class="col-xs-12">
					<div id="verpresupuestos"></div>
				</div>
			</div>
		</div>
	</div>

	

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>