<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();//iniciar sesion

    if(!isset($_COOKIE['visita'])){
        setcookie("visita","true",time()+3600);
        echo "Bienvenido, esta es tu primera visita!<br>";
    }else{
    echo "Bienvenido de nuevo";
     
    }
    
    //contador de visitas con sesión
    $_SESSION['visitas']= $_SESSION['visitas'] ?? 0;//la ?? es un if(!$_SESSION)
    $_SESSION['visitas']++;

    echo "Esta es tu visita número " . $_SESSION['visitas'];
    ?>
</body>
</html>