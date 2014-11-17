<?php
include("conexion.php");
$usuarios = mysql_query("SELECT MAX(id_empresa) FROM usuarios ");
$usuario = mysql_fetch_array($usuarios);

$nombre_empresa=$_POST['nombre_empresa'];
$mail=$_POST['mail'];
$actPrincipal=$_POST['actPrincipal'];
$subsector=$_POST['subsector'];
$nvlVentas=$_POST['nvlVentas'];
$razonSocial=$_POST['razonSocial'];
$origenCapital=$_POST['origenCapital'];
$numEmpleados=$_POST['numEmpleados'];
$tamano=$_POST['tamano'];
$fechaCreacion=$_POST['fechaCreacion'];
$puestoEncuestado=$_POST['puestoEncuestado'];
$sexo=$_POST['sexo'];
//$id_empresa = $usuario[0]+1;

session_start();
$_SESSION['user']=$_REQUEST['nombre_empresa'];
$_SESSION['user_id']=$_REQUEST['id_empresa'];


mysql_query("INSERT INTO usuarios VALUES ('".$nombre_empresa."','".$mail."','".$actPrincipal."','".$subsector."','".$nvlVentas."','".$razonSocial."','".$origenCapital."','".$numEmpleados."','".$tamano."','".$fechaCreacion."','".$puestoEncuestado."','".$sexo."','".$id_empresa."')");

header("location:seccion1.html");
exit();
?>