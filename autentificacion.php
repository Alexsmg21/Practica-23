<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$login=$_POST["login"];
$password=$_POST["pass"];
$mysql=new mysqli("localhost","usuarios","1234");
    if($mysql->select_db("mensajeria")==1 ) {
        $query = "SELECT * FROM usuarios;";
        $resultado = $mysql->query($query);
        $fila = $resultado->fetch_assoc();
        while ($fila) {
           if ($fila["login"]==$login && $fila["password"]==$password) {
              session_start();
              $_SESSION["iniciado"]=1;
              $_SESSION["usuario"]=$fila["id"];
              header('location:pagina.php?');
           }
           if ($fila["login"]!==$login && $fila["password"]!==$password) {
               header('location:iniciosesion.php?error=1');
            }
            $fila = $resultado->fetch_assoc();
        }
        if ($_SESSION["iniciado"]!=1){
            header("location:iniciarsesion.php");
        }
    }
    else{
        header('location:iniciosesion.php?error=2');
    }






?>


</body>
</html>