<?php
    session_start();

    session_unset();
    session_destroy();

    if(isset($_COOKIE["bienvenida"])){
        setcookie("bienvenida", "", time()-1, "/");
    }

    header("Location: index.php");
    exit;
?>