<?php
include("conexion.php");

session_start();

$AP1=$_POST[AP1];
$AP2=$_POST[AP2];
$AP3=$_POST[AP3];
$AP4=$_POST[AP4];
$AP5=$_POST[AP5];
$AP6=$_POST[AP6];
$AP7=$_POST[AP7];
$AP8=$_POST[AP8];
$AP9=$_POST[AP9];

mysql_query("INSERT INTO seccion1 VALUES ('".$id_usuarios."','".$AP1."','".$AP2."','".$AP3."','".$AP4."','".$AP5."','".$AP6."','".$AP7."','".$AP8."','".$AP9."')");

echo "El formulario ya se subio a la base de datos";
echo "<br>";
echo "Gracias por contestar la encuesta :)";

header("location:seccion2.html");
exit();
?>
