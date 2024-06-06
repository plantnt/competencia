<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Copa america</title>
</head>
<body>







    <form action="logica/registro_equipos.php" method="post">
        <label>Name:</label>
        <input type="text" name="nombre_equipo">
        <label>Num:</label>
        <input type="text" name="num_jugadores">
        <label>Nombre tecnico:</label>
        <input type="text" name="nombre_tecnico">
        <input type="submit" value="DALE">
    </form>
</body>
</html>