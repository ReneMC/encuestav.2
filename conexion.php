<?php
include("config.php");

$conexion = mysql_connect($host,$user,$password);
if ($conexion) 
	{
	if (! mysql_select_db($databasename)) 
		{die("error al seleccionar la base de datos <b>".$practica_1."</b>");}
	}
else
	{
	die("Imposible conectarse a <b>".$host."</b> a la base de datos<b>".$databasename."</b>");
	}
?>
