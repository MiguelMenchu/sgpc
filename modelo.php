<?php
class conexion
{
	var $conexionservidor;
	function __construct($database){
		$conexion = false;
		if($this->conexionservidor = mysql_connect("localhost","root","Jesus8")){
			$conexion = true;
			if(mysql_select_db($database,$this->conexionservidor))
				return $conexion;
			else{
				$conexion = false;
				return $conexion;
			}
				
		}
		else
			return $conexion;	
	}

	function close(){
		if(mysql_close($this->conexionservidor))
			return true;
		else
			return false;
	}
}
class login extends conexion
{
	function __construct()
	{
	}
	function existe($usuario,$password){
		$query = "SELECT passwordasesor,nombresasesor from Usuario where passwordasesor = '$password' and nombresasesor = '$usuario'";
		$asesor = mysql_query($query) or die(mysql_error());
		if (mysql_num_rows($asesor) == 1) 
			return true;
		else
			return false;
	}
	function closeconnect(){
		$this->close();
	}
}

class dataasesor extends conexion
{
	var $datos;
	function __construct()
	{
	}
	function datos($id){
		$query =  "SELECT ASS.nombresasesor, AG.nombreagencia, AG.direccionagencia, R.nombreregion from Usuario ASS inner join Agencias AG on ASS.Agencias_idagencia = AG.idagencia inner join Regiones R on AG.Regiones_idregion = R.idregion where ASS.passwordasesor = '$id'";
		$this->datos = mysql_query($query);
	}
	function extraerdatos(){
		if ($datos = mysql_fetch_array($this->datos,MYSQL_ASSOC))
			return $datos;	
		else
			return false;
	}
	function closeconnect(){
		$this->close();
	}
}

/**
* Clase que describe espectos generales de una cartera
*/
class cartera 
{
	var $fecha;
	var $clientes;
	var $diserciones;
	function __construct()
	{
	}

	function getFecha(){
		return $this->fecha();
	}
	function getSinicial(){
		return $this->clientes[0];
	}
	function getEnero(){
		return $this->clientes[1];
	}
	function getFebrero(){
		return $this->clientes[2];
	}	
	function getMarzo(){
		return $this->clientes[3];
	}
	function getAbril(){
		return $this->clientes[4];
	}
	function getMayo(){
		return $this->clientes[5];
	}
	function getJunio(){
		return $this->clientes[6];
	}
	function getJulio(){
		return $this->clientes[7];
	}
	function getAgosto(){
		return $this->clientes[8];
	}
	function getSeptiembre(){
		return $this->clientes[9];
	}
	function getOctubre(){
		return $this->clientes[10];
	}
	function getNoviembre(){
		return $this->clientes[11];
	}
	function getDiciembre(){
		return $this->clientes[12];
	}

	function setSinicial($sinicial){
		$this->clientes[0] = $sinicial;
	}
	function setEnero($enero){
		$this->clientes[1] = $enero;
	}
	function setFebrero($febrero){
		$this->clientes[2] = $febrero;
	}
	function setMarzo($marzo){
		$this->clientes[3] = $marzo;
	}
	function setAbril($abril){
		$this->clientes[4] = $abril;
	}
	function setMayo($mayo){
		$this->clientes[5] = $mayo;
	}
	function setJunio($junio){
		$this->clientes[6] = $junio;
	}
	function setJulio($julio){
		$this->clientes[7] = $julio;
	}
	function setAgosto($agosto){
		$this->clientes[8] = $agosto;
	}
	function setSeptiembre($septiembre){
		$this->clientes[9] = $septiembre;
	}
	function setOctubre($octubre){
		$this->clientes[10] = $octubre;
	}
	function setNoviembre($noviembre){
		$this->clientes[11] = $noviembre;
	}
	function setDiciembre($diciembre){
		$this->clientes[12] = $diciembre;
	}

	function getDenero(){
		return $this->diserciones[0];
	}
	function getDfebrero(){
		return $this->diserciones[1];
	}	
	function getDmarzo(){
		return $this->diserciones[2];
	}
	function getDabril(){
		return $this->diserciones[3];
	}
	function getDmayo(){
		return $this->diserciones[4];
	}
	function getDjunio(){
		return $this->diserciones[5];
	}
	function getDjulio(){
		return $this->diserciones[6];
	}
	function getDagosto(){
		return $this->diserciones[7];
	}
	function getDseptiembre(){
		return $this->diserciones[8];
	}
	function getDoctubre(){
		return $this->diserciones[9];
	}
	function getDnoviembre(){
		return $this->diserciones[10];
	}
	function getDdiciembre(){
		return $this->diserciones[11];
	}

	function setDenero($enero){
		$this->diserciones[0] = $enero;
	}
	function setDfebrero($febrero){
		$this->diserciones[1] = $febrero;
	}
	function setDmarzo($marzo){
		$this->diserciones[2] = $marzo;
	}
	function setDabril($abril){
		$this->diserciones[3] = $abril;
	}
	function setDmayo($mayo){
		$this->diserciones[4] = $mayo;
	}
	function setDjunio($junio){
		$this->diserciones[5] = $junio;
	}
	function setDjulio($julio){
		$this->diserciones[6] = $julio;
	}
	function setDagosto($agosto){
		$this->diserciones[7] = $agosto;
	}
	function setDseptiembre($septiembre){
		$this->diserciones[8] = $septiembre;
	}
	function setDoctubre($octubre){
		$this->diserciones[9] = $octubre;
	}
	function setDnoviembre($noviembre){
		$this->diserciones[10] = $noviembre;
	}
	function setDdiciembre($diciembre){
		$this->diserciones[11] = $diciembre;
	}
}
/**
* Clase que obtiene la informacion de un programa
*/
class Programa extends conexion
{
	var $interes;
	var $plazo;
	var $monto;
	var $porcentajeincremento;
	var $comisiondesembolso;
	var $comisionadministrativa;
	var $otrosdescuentos;
	var $porcentajeincumplimiento;
	var $porcentajecapitalriezgo;


	function __construct($programa,$tipocliente){
		$query = "SELECT * from Programa where Id = $programa and TipoCliente = $tipocliente";	
		$datos = mysql_query($query);
		$programa = mysql_fetch_array($datos);
		$this->interes = $programa["Interes"];
		$this->plazo = $programa["Plazo"];
		$this->monto = $programa["Monto"];
		$this->porcentajeincremento = $programa["PorcentajeIncremento"];
		$this->comisiondesembolso = $programa["ComisionDesembolso"];
		$this->comisionadministrativa = $programa["ComisionAdministrativa"];
		$this->otrosdescuentos = $programa["OtrosDescuentos"];
		$this->porcentajeincumplimiento = $programa["PorcentajeIncumplimiento"];
		$this->porcentajecapitalriezgo = $programa["PorcentajeCapitalRiesgo"];
	}

	

	
}
/**
* Clase que almacena los presupuestos
*/
class presupuesto extends conexion
{
	
	function __construct()
	{
	}

	
	function nuevopresupuesto($plazo,$porcentajederecuperacion,$Programa_idprograma,$Usuario_idasesor,$Tipocliente_idtipocliente,$Anios_idanio){
		$query = "INSERT into Presupuesto(plazo,porcentajederecuperacion,Programa_idprograma,Usuario_idasesor,Tipocliente_idtipocliente,Anios_idanio) values ($plazo,$porcentajederecuperacion,$Programa_idprograma,$Usuario_idasesor,$Tipocliente_idtipocliente,$Anios_idanio)";
		if($nuevo = mysql_query($query)){
			$query="SELECT idpresupuesto from Presupuesto where Anios_idanio = $Anios_idanio and Tipocliente_idtipocliente=$Tipocliente_idtipocliente and Programa_idprograma = $Programa_idprograma and Usuario_idasesor = $Usuario_idasesor";
			$presupuesto = mysql_query($query);
			$idpresupuesto = mysql_fetch_array($presupuesto);
			return $idpresupuesto["idpresupuesto"];
		}
		else
			return false;
	}

	function clientespresupuestos($inicial,$enero,$febrero,$marzo,$abril,$mayo,$junio,$julio,$agosto,$septiembre,$octubre,$noviembre,$diciembre,$asesor){
		echo "$enero";
		$query = "INSERT into Clientes values($inicial,$enero,$febrero,$marzo,$abril,$mayo,$junio,$julio,$agosto,$septiembre,$octubre,$noviembre,$diciembre,$asesor)";
		$clientespresupuestos = mysql_query($query);
	}

	function montospresupuestos($inicial,$enero,$febrero,$marzo,$abril,$mayo,$junio,$julio,$agosto,$septiembre,$octubre,$noviembre,$diciembre,$asesor){
		$query = "INSERT into Montos values($inicial,$enero,$febrero,$marzo,$abril,$mayo,$junio,$julio,$agosto,$septiembre,$octubre,$noviembre,$diciembre,$asesor)";
		$montospresupuestos = mysql_query($query);
	}

	function closeconnect(){
		$this->close();
	}
}

/**
* Claque para hacer todo tipo de presupuestos
*/
class verpresupuesto extends conexion
{
	var $clientesnuevos;
	var $montosnuevos;
	function __construct()
	{
	}
	function idpresupuesto($anio,$programa,$tipocliente,$asesor){
		$query="SELECT Id from Presupuesto where Anio=$anio and TipoCliente=$tipocliente and Programa=$programa and USUARIOS_IDUSUARIO=$asesor";
		if($presupuesto=mysql_query($query)){
			$idpresupuesto = mysql_fetch_array($presupuesto);
			return $idpresupuesto["Id"];
		}	
	}

	function clientesnuevos($idpresupuesto){
		$query = "SELECT * from Cliente where PRESUPUESTOS_Id = $idpresupuesto";
		$this->clientesnuevos = mysql_query($query);
	}

	function montosnuevos($idpresupuesto){
		$query = "SELECT * from  Montos where PRESUPUESTOS_Id = $idpresupuesto";
		$this->montosnuevos = mysql_query($query);
	}
	

	function extraerclientesnuevos(){
		if($clientesnuevos = mysql_fetch_array($this->clientesnuevos,MYSQL_ASSOC))
			return $clientesnuevos;
		else
			return false;
	}

	function extraermontosnuevos(){
		if($montosnuevos = mysql_fetch_array($this->montosnuevos,MYSQL_ASSOC))
			return $montosnuevos;
		else
			return false;
	}

	function closeconnect(){
		$this->close();
	}
}

?>