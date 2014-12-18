<?php 
	@session_start();
	error_reporting(E_ERROR | E_PARSE | E_NOTICE);
	include 'modelo.php';
	$datosasesor;

	if (isset($_POST["programa"])) {
		if (isset($_SESSION["passwordasesor"])) {
				$db="sgpc";
		$conexionn = new conexion($db);
		$presupuesto2014 = new presupuesto();
		$programa=$_POST["programa"];
		$clientesiniciales = $_POST["clientesiniciales"];

		$clientesnuevos = array($_POST["enero"],$_POST["febrero"],
			$_POST["marzo"],$_POST["abril"],$_POST["mayo"],
			$_POST["junio"],$_POST["julio"],$_POST["agosto"],
			$_POST["septiembre"],$_POST["octubre"],$_POST["noviembre"],
			$_POST["diciembre"]);
		
		$recuperacionagricola = array($_POST["reenero"],$_POST["refebrero"],
			$_POST["remarzo"],$_POST["reabril"],$_POST["remayo"],
			$_POST["rejunio"],$_POST["rejulio"],$_POST["reagosto"],
			$_POST["reseptiembre"],$_POST["reoctubre"],$_POST["renoviembre"],
			$_POST["rediciembre"]);

		$montosnuevos = array($_POST["mnenero"],$_POST["mnfebrero"],
			$_POST["mnmarzo"],$_POST["mnabril"],$_POST["mnmayo"],
			$_POST["mnjunio"], $_POST["mnjulio"], 
			$_POST["mnagosto"],$_POST["mnseptiembre"],
			$_POST["mnoctubre"],$_POST["mnnoviembre"], $_POST["mndiciembre"]);

		$clientesrecurrentes = array($_POST["clientesiniciales"],$_POST["renero"],$_POST["rfebrero"],
			$_POST["rmarzo"],$_POST["rabril"],$_POST["rmayo"],
			$_POST["rjunio"],$_POST["rjulio"],$_POST["ragosto"],
			$_POST["rseptiembre"],$_POST["roctubre"],$_POST["rnoviembre"],
			$_POST["rdiciembre"]);

		$montosrecurrentes = array($_POST["montonuevorecurrente"],$_POST["mrenero"],$_POST["mrfebrero"],
			$_POST["mrmarzo"],$_POST["mrabril"],$_POST["mrmayo"],
			$_POST["mrjunio"], $_POST["mrjulio"], 
			$_POST["mragosto"],$_POST["mrseptiembre"],
			$_POST["mroctubre"],$_POST["mrnoviembre"], $_POST["mrdiciembre"]);
		
		$clientesdiserciones = array($_POST["denero"],$_POST["dfebrero"],
			$_POST["dmarzo"],$_POST["dabril"],$_POST["dmayo"],
			$_POST["djunio"],$_POST["djulio"],$_POST["dagosto"],
			$_POST["dseptiembre"],$_POST["doctubre"],$_POST["dnoviembre"],
			$_POST["ddiciembre"]);
		
		if($idpresupuesto=$presupuesto2014->nuevopresupuesto(0,0,$programa,$_SESSION["passwordasesor"],1,1)){
		$presupuesto2014->clientespresupuestos(0,$clientesnuevos[0],$clientesnuevos[1],$clientesnuevos[2],$clientesnuevos[3],$clientesnuevos[4],$clientesnuevos[5],$clientesnuevos[6],$clientesnuevos[7],$clientesnuevos[8],$clientesnuevos[9],$clientesnuevos[10],$clientesnuevos[11],$idpresupuesto);
		$presupuesto2014->montospresupuestos(0,$montosnuevos[0],$montosnuevos[1],$montosnuevos[2],$montosnuevos[3],$montosnuevos[4],$montosnuevos[5],$montosnuevos[6],$montosnuevos[7],$montosnuevos[8],$montosnuevos[9],$montosnuevos[10],$montosnuevos[11],$idpresupuesto);
		}
		if($idpresupuesto=$presupuesto2014->nuevopresupuesto(0,0,$programa,$_SESSION["passwordasesor"],2,1)){
		$presupuesto2014->clientespresupuestos($clientesrecurrentes[0],$clientesrecurrentes[1],$clientesrecurrentes[2],$clientesrecurrentes[3],$clientesrecurrentes[4],$clientesrecurrentes[5],$clientesrecurrentes[6],$clientesrecurrentes[7],$clientesrecurrentes[8],$clientesrecurrentes[9],$clientesrecurrentes[10],$clientesrecurrentes[11],$clientesrecurrentes[12],$idpresupuesto);
		$presupuesto2014->montospresupuestos($montosrecurrentes[0],$montosrecurrentes[1],$montosrecurrentes[2],$montosrecurrentes[3],$montosrecurrentes[4],$montosrecurrentes[5],$montosrecurrentes[6],$montosrecurrentes[7],$montosrecurrentes[8],$montosrecurrentes[9],$montosrecurrentes[10],$montosrecurrentes[11],$montosrecurrentes[12],$idpresupuesto);
		}
		if($idpresupuesto=$presupuesto2014->nuevopresupuesto(0,0,$programa,$_SESSION["passwordasesor"],3,1)){
		$presupuesto2014->clientespresupuestos(0,$clientesdiserciones[0],$clientesdiserciones[1],$clientesdiserciones[2],$clientesdiserciones[3],$clientesdiserciones[4],$clientesdiserciones[5],$clientesdiserciones[6],$clientesdiserciones[7],$clientesdiserciones[8],$clientesdiserciones[9],$clientesdiserciones[10],$clientesdiserciones[11],$idpresupuesto);
		}
		
		$presupuesto2014->closeconnect();
		//header("location:carteras.php");
		}
		else
			echo "Rayos, la variable de session me esta dando problemas";
		//$conexion->close();
	}



if(isset($_POST["asesor"])){
$db="sgpc";
$_SESSION["asesor"] = $_POST["asesor"];
$_SESSION["passwordasesor"] = $_POST["passwordasesor"];
$conexionn = new conexion($db);
if($conexionn){
	$asesor = new login();
	if($asesor->existe($_SESSION["asesor"],$_SESSION["passwordasesor"])){
			/*$host  = $_SERVER['HTTP_HOST'];
			$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$extra = 'carteras.php';*/
			header("Location:carteras.php");
		}
	else{
		unset($_SESSION["asesor"]);
		unset($_SESSION["passwordasesor"]);
		header("location:index.html");
	}
			$conexionn->close();
  }
}
function asesor($passwordasesor){
	$conexion = new conexion("sgpc");
	if(!$conexion){
		echo "Error el la conexion al servidor";
	}
	else {
		$asesor = new dataasesor();
		$asesor->datos($passwordasesor);
		global $datosasesor;
		$datosasesor=$asesor->extraerdatos();
	}
	$conexion->close();
}
function datosasesor($dato){
	global $datosasesor;
	switch ($dato) {
		case 'Nombreasesor':
			$nombre = $datosasesor["nombresasesor"];
			echo "$nombre";
			break;
		case 'Nombreagencia':
			$nombreagencia = $datosasesor["nombreagencia"];
			echo "$nombreagencia";
			break;
		case 'Direccionagencia':
			$direccion = $datosasesor["direccionagencia"];
			echo "$direccion";
			break;
		case 'Nombreregion':
			$direccionagencia = $datosasesor["nombreregion"];
			echo "$direccionagencia";
			break;
		default:
			# code...
			break;
	}

}

if (isset($_GET["pprograma"]) && isset($_GET["ptipocliente"]) && isset($_SESSION["passwordasesor"])) {
		$db="sgpc";
		$conexionn = new conexion($db);
		$pprograma = $_GET["pprograma"];
		$ptipocliente = $_GET["ptipocliente"];

		$verpresupuesto = new verpresupuesto();
		$idpresupuesto = $verpresupuesto->idpresupuesto(2014,$pprograma,$ptipocliente,$_SESSION["passwordasesor"]);
		?> 

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Presupuestos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<br> <br>
		<table class="table table-striped table-bordered" align="center">
			<tr>
				<td width="100">Inicial</td>
				<td width="100">Enero</td>
				<td width="100">Febrero</td>
				<td width="100">Marzo</td>
				<td width="100">Abril</td>
				<td width="100">Mayo</td>
				<td width="100">Junio</td>
				<td width="100">Julio</td>
				<td width="100">Agosto</td>
				<td width="100">Septiembre</td>
				<td width="100">Octubre</td>
				<td width="100">Noviembre</td>
				<td width="100">Diciembre</td>
			</tr>
			<?php 
			$verpresupuesto->clientesnuevos($idpresupuesto);
			$saldoclientes = array();

			while ($clientesnuevos = $verpresupuesto->extraerclientesnuevos()) {
				?>
				<tr>
					<?php
					$i = 0;
					foreach ($clientesnuevos as $key => $value) {
						if($i != 13){
						?>
							<td width="100">
								<?php echo "$value";
								$saldoclientes[$i]=$value;?>
							</td>
						<?php
					}
					$i++;
					}
				?>
				</tr>
				<?php
			}
					$vsaldoclientes = 0;
					$i = 0;
				?>
				<tr>
				<?php
					foreach ($saldoclientes as $key => $value) {
						if($i != 13){
						?>
							<td width="100">
								<?php
								$vsaldoclientes = $vsaldoclientes + $saldoclientes[$i];	
								echo "$vsaldoclientes";?>
							</td>
						<?php
					}
					$i++;
					}
				?>
				</tr>	
		</table>
</body>
</html>
		<?php
		$conexionn->close();
	}

	// Inicia reporte para los montos respecificos

if (isset($_GET["pprogramamontos"]) && isset($_GET["ptipoclientemontos"]) && isset($_SESSION["passwordasesor"])) {
		$db="sgpc";
		$conexionn = new conexion($db);
		$pprograma = $_GET["pprogramamontos"];
		$ptipocliente = $_GET["ptipoclientemontos"];

		$verpresupuesto = new verpresupuesto();
		$idpresupuesto = $verpresupuesto->idpresupuesto(2014,$pprograma,$ptipocliente,$_SESSION["passwordasesor"]);
		?> 

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Presupuestos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<br> <br>
		<table class="table table-striped table-bordered" align="center">
			<tr>
				<td width="100">Inicial</td>
				<td width="100">Enero</td>
				<td width="100">Febrero</td>
				<td width="100">Marzo</td>
				<td width="100">Abril</td>
				<td width="100">Mayo</td>
				<td width="100">Junio</td>
				<td width="100">Julio</td>
				<td width="100">Agosto</td>
				<td width="100">Septiembre</td>
				<td width="100">Octubre</td>
				<td width="100">Noviembre</td>
				<td width="100">Diciembre</td>
			</tr>
			<?php 
			$verpresupuesto->montosnuevos($idpresupuesto);
			$saldomontos = array();

			while ($montosnuevos = $verpresupuesto->extraermontosnuevos()) {
				?>
				<tr>
					<?php
					$i = 0;
					foreach ($montosnuevos as $key => $value) {
						if($i != 13){
						?>
							<td width="100">
								<?php echo "$value";
								$saldomontos[$i]=$value;?>
							</td>
						<?php
					}
					$i++;
					}
				?>
				</tr>
				<?php
			}
					$vsaldomontos = 0;
					$i = 0;
				?>
				<tr>
				<?php
					foreach ($saldomontos as $key => $value) {
						if($i != 13){
						?>
							<td width="100">
								<?php
								$vsaldomontos = $vsaldomontos + $saldomontos[$i];	
								echo "$vsaldomontos";?>
							</td>
						<?php
					}
					$i++;
					}
				?>
				</tr>
			</table>
</body>
</html>
		<?php
		$conexionn->close();
	}
?> 