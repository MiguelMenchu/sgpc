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
		$query = "SELECT Id, Nombreas from Asesor where Id = $password and Nombreas = '$usuario'";
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
		$query =  "SELECT ASS.Nombreas, AG.nombreag, AG.Direccionag, R.nombrere from Asesor ASS inner join Agencia AG on Agencia_Id = AG.id inner join Region R on Region_id = R.id where ASS.id = $id";
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
?>