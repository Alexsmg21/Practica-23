<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>

    </style>
</head>
<body>
<header>
    <h1>Buscar Usuarios</h1>
</header>
<form action="encontrado.php" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="apellido1">Apellido1</label>
    <input type="text" id="apellido1" name="apellido1"><br>
    <label for="apellido2">Apellido2</label>
    <input type="text" id="apellido2" name="apellido2"><br>
    <button id="boton">Enviar</button>
</form>
<div><a href="index.php">Cerrar sesion</a>
</div>


</body>
</html>