<?php 
	@session_start(); 
	error_reporting(E_ERROR | E_PARSE | E_NOTICE);
	include 'modelo.php';
	$datosasesor;
if(isset($_POST["asesor"])){
$db="bdgestionprecartera";
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
	$conexion = new conexion("bdgestionprecartera");
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
			$nombre = $datosasesor["Nombreas"];
			echo "$nombre";
			break;
		case 'Nombreagencia':
			$nombreagencia = $datosasesor["nombreag"];
			echo "$nombreagencia";
			break;
		case 'Direccionagencia':
			$direccion = $datosasesor["Direccionag"];
			echo "$direccion";
			break;
		case 'Nombreregion':
			$direccionagencia = $datosasesor["nombrere"];
			echo "$direccionagencia";
			break;
		default:
			# code...
			break;
	}
}
?> 