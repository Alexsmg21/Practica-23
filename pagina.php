<?php
$texto2="";
if(isset($_POST["texto2"]))
    $texto2=$_POST["texto2"];

if(isset($_POST["texto"])) {
    $texto = $_POST["texto"];
    if(strpos($texto,"<")!==false || strpos($texto,">")!==false){
        $texto="";
        $texto2="";
    }
    else{
        $texto2=$texto2."<p>$texto</p>";
    }
}
if (isset($_COOKIE["texto"])){
    $texto3=$_COOKIE["texto"];
}
setcookie("texto",$texto2,time()+60*60*24*7*31*12*365);
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos2.css">
    <style>
        #abajo{
            bottom: 0;
            position: fixed;
            border: 10px solid purple;
            margin-top: 20px;
            margin-left: 53%;
            font-size: 1.5em;
            font-family: "Arial Black",sans-serif;
            border-radius: 20px;
            color: #1ec9ff;
        }
        #abajo2{
            bottom: 0;
            position: fixed;
            border: 10px solid purple;
            margin-top: 20px;
            margin-left: 30%;
            font-size: 1.5em;
            font-family: "Arial Black",sans-serif;
            border-radius: 20px;
            color: #1ec9ff;
        }
        #mensajes{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<header>
    <h1 style="font-family: 'Arial Black',sans-serif">EL MURO</h1>
</header>
<section>
    <form action="pagina.php" method="post">
        <div id="div1">
            <h3>Nuevo mensaje</h3>
            <textarea name="texto" id="texto" cols="30" rows="10" ></textarea>
            <img src="img/61516.png" id="img1" alt="icono"><img src="img/61516.png" id="img2" alt="icono">
            <button id="boton">Comentar</button>
        </div>
        <textarea name="texto2" id="texto2" cols="30" rows="10" hidden><?=$texto2?></textarea>

    </form>
    <br>
    <div id="div2"><a href="encontrar.php" id="a2">Encontrar amigos</a><img src="img/android-friends_icon-icons.com_50520.png" id="img3" alt="icono"><img src="img/android-friends_icon-icons.com_50520.png" id="img4" alt="icono"></div>
</section>
<div class="row justify-content-center">
    <div class="col-6">
        <section id="mensajes"><?=$texto2?></section>
    </div>
</div>
<div >
    <a href="borrar.php" id="abajo2">Borrar todos</a>
    <a href="index.php" id="abajo">Cerrar sesion</a>
</div>
</body>
</html>