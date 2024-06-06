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
<body class="flex items-center justify-center bg-blue-500 overflow-x-hidden">
    <div id="navbar" class="w-full h-[70px] fixed top-0 flex justify-between p-5 space-x-5 bg-white z-10">
        <button class="font-bold text-xl">LOGO</button>
        <div class="flex items-center space-x-2">
            <button class="bg-blue-500 px-4 py-2 rounded-xl font-bold text-white" onclick='goToLogin()'>Iniciar Sesion</button>
            <button class="bg-blue-500 px-4 py-2 rounded-xl font-bold text-white" onclick='goToSignUp()'>Registrarse</button>
        </div>
    </div>
    <img src="imagenes\indexbg.jpg" class="object-cover opacity-75 absolute top-0">
    <h1 class="text-white font-bold text-4xl">Bienvenid@</h1>
    <button></button>
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

<script>
    const goToLogin = () => {
        window.location.href="/competencia/inicia_sesion.php"
    }
    
    const goToSignUp = () => {
        window.location.href="/competencia/user_register.php"
    }
</script>