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
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-xs-8"> <br> <br>
				<p>
					<h1 class="text-center">Crear Nueva Cartera <br>
						<small>Presupueste los programas para el anio 2014</small>
					</h1>
				</p>
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
		<hr>
	</div>
	<div class="row">
		<form action="controlador.php" role="form">
			<div class="col-xs-3">
				<div class="form-froup">
					<select class="form-control" name="programa">
					  <option value="agricola">Agricola</option>
					  <option value="vivienda">Vivienda</option>
					  <option value="construccion">Construccion</option>
					  <option value="negocios">Negocios</option>
					  <option mujeres="mujeres">Prestamo a mujeres</option>
					  <option selected="selected">Selecciones un programa</option>
					</select>
				</div> <br>
				<div class="text-center" align="center">	
					<input type="button" class="btn btn-primary btn-lg btn-block" onclick="document.getElementById('clientes').style.display='block'" value="PRESUPUESTAR CLIENTES">
				</div>
			</div>
			<div class="col-xs-9">
				
				<div id="clientes">'
					<div class="form-group has-success has-feedback">
						<p class="lead text-primary"> Clientes iniciales
						  <select name="clientesiniciales" id="clientesiniciales">
						    <script type="text/javascript">
						    	for (var i = 0; i < 30; i++) {
						    		document.write("<option value="+parseInt(i+1)+">"+ (i+1) +"</option>");
						    	};
						    </script>
						  </select>
						  </p>
				 	</div> <br>
				 	<div class="form-group has-success has-feedback">
					    <p class="lead text-primary"> Monto seleccionado
						  <input type="text" placeholder="Digite monto" name="montonuevo">
						</p>
				 	</div>
				 	<button type="button" class="btn btn-success" id="inicial">Iniciar</button><br> <br>
					<table class="table">
						<tr class="success">
							<td>Enero</td>
							<td>Febrero</td>
							<td>Marzo</td>
							<td>Abril</td>
							<td>Mayo</td>
							<td>Junio</td>
							<td>Julio</td>
							<td>Agosto</td>
							<td>Septiembre</td>
							<td>Octubre</td>
							<td>Nobiembre</td>
							<td>Diciembre</td>
						</tr>
						<tr> 
							<td>
								<select name="enero" id="cenero">
									<script>
										for (var i = 0; i < 20; i++){
											document.write("<option value="+parseInt(i+1)+">"+(i+1)+"</option>");
										};
									</script>
								</select>
							</td>
							<td>
								<select name="febrero" id="cfebrero">
									<script>
										for (var i = 0; i < 20; i++){
											document.write("<option value="+parseInt(i+1)+">"+(i+1)+"</option>");
										};
									</script>
								</select>
							</td>
							<td>
								<select name="marzo" id="cmarzo">
									<script>
										for (var i = 0; i < 20; i++){
											document.write("<option value="+parseInt(i+1)+">"+(i+1)+"</option>");
										};
									</script>
								</select>
							</td>
							<td>
								<select name="abril" id="cabril">
									<script>
										for (var i = 0; i < 20; i++){
											document.write("<option value="+parseInt(i+1)+">"+(i+1)+"</option>");
										};
									</script>
								</select>
							</td>
							<td>
								<select name="mayo" id="cmayo">
									<script>
										for (var i = 0; i < 20; i++){
											document.write("<option value="+parseInt(i+1)+">"+(i+1)+"</option>");
										};
									</script>
								</select>
							</td>
							<td>
								<select name="junio" id="cjunio">
									<script>
										for (var i = 0; i < 20; i++){
											document.write("<option value="+parseInt(i+1)+">"+(i+1)+"</option>");
										};
									</script>
								</select>
							</td>
							<td>
								<select name="julio" id="cjulio">
									<script>
										for (var i = 0; i < 20; i++){
											document.write("<option value="+parseInt(i+1)+">"+(i+1)+"</option>");
										};
									</script>
								</select>
							</td>
							<td>
								<select name="agosto" id="cagosto">
									<script>
										for (var i = 0; i < 20; i++){
											document.write("<option value="+parseInt(i+1)+">"+(i+1)+"</option>");
										};
									</script>
								</select>
							</td>
							<td>
								<select name="septiembre" id="cseptiembre">
									<script>
										for (var i = 0; i < 20; i++){
											document.write("<option value="+parseInt(i+1)+">"+(i+1)+"</option>");
										};
									</script>
								</select>
							</td>
							<td>
								<select name="octubre" id="coctubre">
									<script>
										for (var i = 0; i < 20; i++){
											document.write("<option value="+parseInt(i+1)+">"+(i+1)+"</option>");
										};
									</script>
								</select>
							</td>
							<td>
								<select name="noviembre" id="cnoviembre">
									<script>
										for (var i = 0; i < 20; i++){
											document.write("<option value="+parseInt(i+1)+">"+(i+1)+"</option>");
										};
									</script>
								</select>
							</td>
							<td>
								<select name="diciembre" id="cdiciembre">
									<script>
										for (var i = 0; i < 20; i++){
											document.write("<option value="+parseInt(i+1)+">"+(i+1)+"</option>");;
										};
									</script>
								</select>
							</td>
						</tr>
						<tr>
							<td><button type="button" class="btn btn-info" id="benero">_/</button> </td>
							<td><button type="button" class="btn btn-info" id="bfebrero">_/</button></td>
							<td><button type="button" class="btn btn-info" id="bmarzo">_/</button></td>
							<td><button type="button" class="btn btn-info" id="babril">_/</button></td>
							<td><button type="button" class="btn btn-info" id="bmayo">_/</button></td>
							<td><button type="button" class="btn btn-info" id="bjunio">_/</button></td>
							<td><button type="button" class="btn btn-info" id="bjulio">_/</button></td>
							<td><button type="button" class="btn btn-info" id="bagosto">_/</button></td>
							<td><button type="button" class="btn btn-info" id="bseptiembre">_/</button></td>
							<td><button type="button" class="btn btn-info" id="boctubre">_/</button></td>
							<td><button type="button" class="btn btn-info" id="bnoviembre">_/</button></td>
							<td><button type="button" class="btn btn-info" id="bdiciembre">_/</button></td>
						</tr>
					</table>

				</div>

			</div>
			<br>
			<hr> 
				<br><br> <br>
		<div class="container">
			<table id="tables" class="table table-bordered table-hover">
						<tr>
							<th>Saldo inicial</th>
							<th>Enero</th>
							<th>Febrero</th>
							<th>Marzo</th>
							<th>Abril</th>
							<th>Mayo</th>
							<th>Junio</th>
							<th>Julio</th>
							<th>Agosto</th>
							<th>Septiembre</th>
							<th>Octubre</th>
							<th>Noviembre</th>
							<th>Diciembre</th>
						</tr>
						<tr>
							<td>
								<div id="ssinicial"></div>
							</td>
							<td>
								<div id="senero"></div>
							</td>
							<td>
								<div id="sfebrero"></div>
							</td>
							<td>
								<div id="smarzo"></div>
							</td>
							<td>
								<div id="sabril"></div>
							</td>
							<td>
								<div id="smayo"></div>
							</td>
							<td>
								<div id="sjunio"></div>
							</td>
							<td>
								<div id="sjulio"></div>
							</td>
							<td>
								<div id="sagosto"></div>
							</td>
							<td>
								<div id="sseptiembre"></div>
							</td>
							<td>
								<div id="soctubre"></div>
							</td>
							<td>
								<div id="snoviembre"></div>
							</td>
							<td>
								<div id="sdiciembre"></div>
							</td>
						</tr>
					</table>
				</div>
		</form>
	</div>
	



	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>