<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
    <h1>Registrase en tu cuenta</h1>
</header>
<form action="registrado.php" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="apellido1">Apellido1</label>
    <input type="text" id="apellido1" name="apellido1"><br>
    <label for="apellido2">Apellido2</label>
    <input type="text" id="apellido2" name="apellido2"><br>
    <label for="login">login</label>
    <input type="text" id="login" name="login"><br>
    <label for="pass">Contraseña</label>
    <input type="password" id="pass" name="pass"><br>
    <label for="confi">Confirmar la contraseña</label>
    <input type="password" id="confi" name="confi"><br>
    <button>Enviar</button>
</form>
<?php
    if (isset($_GET["error"])){
        $error=$_GET["error"];
        if ($error==1){
            echo "<section><p>Error al selecionar la base de datos</p></section>";
        }
        if ($error==2){
            echo "<section><p>Las contraseñas no coinciden</p></section>";
        }
    }
?>
<div ><a href="index.php" id="abajo">Volver atrás</a>
</div>

</body>
</html>