<?php
    if (isset($_POST["nombre"])&& isset($_POST["apellido1"])&& isset($_POST["apellido2"])&& isset($_POST["login"])
    && isset($_POST["pass"])&& isset($_POST["confi"])){
        $nombre=$_POST["nombre"];
        $apellido1=$_POST["apellido1"];
        $apellido2=$_POST["apellido2"];
        $login=$_POST["login"];
        $pass=$_POST["pass"];
        $confi=$_POST["confi"];

        if ($pass==$confi){
            $mysqli=new mysqli("localhost","usuarios","1234");
            if ($mysqli->select_db("mensajeria")) {
                $mysqli->query("INSERT INTO usuarios VALUES (NULL ,'$nombre','$apellido1','$apellido2','$login','$pass')");
                header("location:index.php");
            }
            else{
                header("location:registro.php?error=1");

            }
        }else{
            header("location:registro.php?error=2");
        }
    }

?>



