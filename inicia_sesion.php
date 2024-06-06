<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Iniciar sesión</title>
</head>
<body class="flex items-center justify-center h-full bg-gradient-to-r from-violet-500 to-fuchsia-500">

    <form action="" method="post" class="relative mt-6 bg-white w-[400px] h-[300px] flex flex-col items-center justify-center space-y-4 p-5 rounded-lg shadow-lg">
        <span class="absolute top-2 right-2 cursor-pointer"><a href="/competencia"><img src="imagenes\icons\x.png" class="w-[10px]"></a></span>
        <h2 class="font-semibold text-lg">Inicia Sesión</h2>
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
        <button type="submit" class="bg-blue-500 px-4 py-2 rounded-full text-white font-semibold hover:bg-blue-900 transition-all">Inciar sesión</button>
    </form>
    
</body>
</html>