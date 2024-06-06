<?php

require "../conexion/conexion.php";

session_start();
$nombre_equipo=$_GET["equipo"];

$verequipos="SELECT * FROM equipos where nombre_equipo='$nombre_equipo'";
$resultado=mysqli_query($servidor,$verequipos);

while($regequipos= mysqli_fetch_array($resultado)){
    $id_equipo=$regequipos["id"];
    $nombre_equipo=$regequipos["nombre_equipo"];
    $num_jugadores=$regequipos["num_jugadores"];
    $nombre_tecnico=$regequipos["nombre_tecnico"];
}

$sql="INSERT INTO tabla_posiciones VALUE ('0','$id_equipo','0','0','0','0','0','0','0','0')";
$result=mysqli_query($servidor,$sql) or die ("Error en consulta<br>MySQL dice: ".mysqli_error());

header("location:../index.php");