<?php

?>

<?php
require "conexion/conexion.php";

$verequipos="SELECT * FROM equipos";
$resultado=mysqli_query($servidor,$verequipos);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Partido</title>
</head>
<body>
    <form method="post" action="logica/reg_partido.php">
        <label>Equipo Local:</label>
        <select name="local" id="">
            <?php
            while($regequipos= mysqli_fetch_array($resultado)){
                $id_equipo=$regequipos["id"];
                $nombre_equipo=$regequipos["nombre_equipo"];
                $num_jugadores=$regequipos["num_jugadores"];
                $nombre_tecnico=$regequipos["nombre_tecnico"];
            ?>
            <option value="<?php echo $id_equipo;?>"><?php echo $nombre_equipo;?></option>
            <?php
             }
             ?>
        </select>
        VS
        <label for="local_team">Equipo Visitante:</label>
        <select name="visitante" id="">
            <?php
            $verequiposs="SELECT * FROM equipos";
            $resultadoo=mysqli_query($servidor,$verequiposs);
            while($regequiposs= mysqli_fetch_array($resultadoo)){
                $id_equipoo=$regequiposs["id"];
                $nombre_equipoo=$regequiposs["nombre_equipo"];
                $num_jugadoress=$regequiposs["num_jugadores"];
                $nombre_tecnicoo=$regequiposs["nombre_tecnico"];
            ?>
            <option value="<?php echo $id_equipoo;?>"><?php echo $nombre_equipoo;?></option>
            <?php
             }
             ?>
        </select>
        <label for="match_date">Fecha del Partido:</label>
        <input type="date" id="match_date" name="date"><br><br>
        <label for="match_time">Hora del Partido:</label>
        <input type="time" id="match_time" name="time"><br><br>
        <input type="submit" value="Crear Partido">
    </form>