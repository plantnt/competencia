<?php

require "../conexion/conexion.php";

session_start();

$id_equipo_local=$_POST['local'];
$id_equipo_visitante=$_POST['visitante'];
$fecha=$_POST['date'];
$time=$_POST['time'];

$sql="INSERT INTO calendario VALUE ('0','$id_equipo_local','$id_equipo_visitante','$fecha','$time','0','0')";
$result=mysqli_query($servidor,$sql) or die ("Error en consulta<br>MySQL dice: ".mysqli_error());

header("location:../calendario.php");