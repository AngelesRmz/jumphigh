<?php 
function conectar(){
	$server = "127.0.0.1:3306";
	$user = "root";
	$pas = "";
	$db = "pf_pm";

	$conexion = mysqli_connect($server, $user, $pas, $db) 
	or die("Error al conectar a la base de datos".mysql_error());

	return $conexion;
}

function desconectar() {
	mysqli_close();
}
?>