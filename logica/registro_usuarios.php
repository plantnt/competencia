<?php

require "../conexion/conexion.php";

session_start();

$nombre_completo=$_POST["nombre_completo"];
$contraseña=$_POST["contraseña"];
$nombre_usuario=$_POST["nombre_usuario"];

$sql="INSERT INTO usuarios VALUE ('0','$nombre_completo','$contraseña','$nombre_usuario','usuario')";
$result=mysqli_query($servidor,$sql) or die ("Error en consulta<br>MySQL dice: ".mysqli_error());

header("location:../index.php");

?>