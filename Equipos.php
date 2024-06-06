<?php
require "conexion/conexion.php";

$vertabla="SELECT * FROM tabla_posiciones order by puntos asc";
$resultadotabla=mysqli_query($servidor,$vertabla);

$posicion=1;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" width="100%">
  <tr>
    <th>Pos</th>
    <th>Equipo</th>
    <th>PJ</th>
    <th>PG</th>
    <th>PE</th>
    <th>PP</th>
    <th>GF</th>
    <th>GC</th>
    <th>GD</th>
    <th>Pts</th>
  </tr>
  <?php
  while($regtabla=mysqli_fetch_array($resultadotabla)){
    $id_equipo=$regtabla['id_equipo'];
    $puntos=$regtabla['puntos'];
    $goles_favor=$regtabla['goles_favor'];
    $goles_contra=$regtabla['goles_contra'];
    $diferencia=$goles_favor-$goles_contra;
    $partidos_jugados=$regtabla['partidos_jugados'];
    $partidos_ganados=$regtabla['partidos_ganados'];
    $partidos_perdidos=$regtabla['partidos_perdidos'];
    $partidos_empatados=$regtabla['partidos_empatados'];


    $verequipo="SELECT * FROM equipos where id='$id_equipo'";
    $resultadoequipo=mysqli_query($servidor,$verequipo);

    while($regequipo=mysqli_fetch_array($resultadoequipo)){
        $nombre_equipo=$regequipo['nombre_equipo'];

        ?>
  <tr>
    <td><?php echo $posicion++; ?></td>
    <td><?php echo $nombre_equipo; ?></td>
    <td><?php echo $partidos_jugados; ?></td>
    <td> <?php echo $partidos_ganados; ?></td>
    <td><?php echo $partidos_empatados; ?></td>
    <td><?php echo $partidos_perdidos; ?></td>
    <td><?php echo $goles_favor; ?></td>
    <td><?php echo $goles_contra; ?></td>
    <td><?php echo $diferencia; ?></td>
    <td><?php echo $puntos; ?></td>
  </tr>
  <?php     
  }
}?>
</table>
</body>
</html>