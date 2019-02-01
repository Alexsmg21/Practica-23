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
    <h1>Inicio Sesión</h1>
</header>
<form action="autentificacion.php" method="post">
    <label for="login">login</label>
    <input type="text" id="login" name="login"><br>
    <label for="pass">Contraseña</label>
    <input type="password" id="pass" name="pass"><br>
    <button>Enviar</button>
</form>
<?php
if (isset($_GET["error"])){
    $error=$_GET["error"];
    if ($error==1){
        echo "<section><p>Los datos no sos correctos</p></section>";
    }


}
?>

<div ><a href="index.php" id="abajo">Volver atrás</a>
</div>
</body>
</html>