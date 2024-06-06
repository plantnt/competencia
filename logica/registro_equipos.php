<?php

require "../conexion/conexion.php";

session_start();

$nombre_equipo=$_POST["nombre_equipo"];
$num_jugadores=$_POST["num_jugadores"];
$nombre_tecnico=$_POST["nombre_tecnico"];

$sql="INSERT INTO equipos VALUE ('0','$nombre_equipo','$num_jugadores','$nombre_tecnico')";
$result=mysqli_query($servidor,$sql) or die ("Error en consulta<br>MySQL dice: ".mysqli_error());

header("location:../index.php");

?>