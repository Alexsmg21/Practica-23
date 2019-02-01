<?php
$nombre=$_POST["nombre"];
$apellido1=$_POST["apellido1"];
$apellido2=$_POST["apellido2"];
$mysql=new mysqli("localhost","usuarios","1234");
if($mysql->select_db("mensajeria")==1 ) {
    $query = "SELECT * FROM usuarios;";
    $resultado = $mysql->query($query);
    $fila = $resultado->fetch_assoc();
        if ($fila["nombre"]==$nombre && $fila["apellido1"]==$apellido1
            && $fila["apellido2"]==$apellido2) {
            echo "<section><h1>Usuario encontrado <br> <h2>Login: <span>" . $fila["login"] ."</span></h2> </h1>
            <a href='encontrar.php'>Econtrarlo</a></section>";
        }
        else {
            echo "<h1>Este usuario no existe</h1>  <a href='encontrar.php'>Econtrarlo</a>";
        }
            $fila = $resultado->fetch_assoc();


}

?>
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

        h1{
            text-align: center;
        }
        h2{
            text-align: center;
            font-size: 2em;
            font-family: "Arial Black",sans-serif;
            background: -webkit-linear-gradient(#32bcff, #7b1c7f);
            width: 50%;
            margin-left: 23%;
            border-radius: 30px;
            color:;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

        }
        span{
            font-size: 2.5em;
            font-family: "Arial Black",sans-serif;
            background: -webkit-linear-gradient(#6228ff, #7f112e);
            color:;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

        }
        a{
            border: 10px solid purple;
            margin-top: 20px;
            margin-left: 44%;
            font-size: 1.5em;
            font-family: "Arial Black",sans-serif;
            border-radius: 20px;
        }
    </style>
</head>
<body>

</body>
</html>
