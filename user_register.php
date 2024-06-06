<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Copa America Registro</title>
</head>
<body class="flex items-center justify-center h-full bg-gradient-to-r from-blue-500 to-green-500">

    <form action="" method="post" class="relative mt-6 bg-white w-[400px] h-[300px] flex flex-col items-center justify-center space-y-4 p-5 rounded-lg shadow-lg">
        <span class="absolute top-2 right-2 cursor-pointer"><a href="/competencia"><img src="imagenes\icons\x.png" class="w-[10px]"></a></span>
        <h2 class="font-semibold text-lg">Registrarse</h2>
        <div class="flex flex-col space-y-5 w-full">
            <label>
                <p>Usuario</p>
                <input type="text" name="username" class="outline-none w-full h-[40px] border-b-[1px] border-slate-300">
            </label>
            <label>
                <p>Contraseña</p>
                <input type="text" name="password" class="outline-none w-full h-[40px] border-b-[1px] border-slate-300">
            </label>
        </div>
        <button type="submit" class="bg-blue-500 px-4 py-2 rounded-full text-white font-semibold hover:bg-blue-900 transition-all">Registrarse</button>
    </form>
    
</body>
</html>