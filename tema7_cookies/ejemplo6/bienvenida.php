<?php
    session_start();

    $tiempo_inactividad = 5*60;

    // Verificar si hay actividad reciente
    if (isset($_SESSION['ultimoAcceso']) && (time() - $_SESSION['ultimoAcceso'] > $tiempo_inactividad)) {
        // Si han pasado más de 5 minutos, destruir la sesión
        session_unset();
        session_destroy();
        header("Location: logout.php"); // Redirigir al formulario de login
        exit;
    }


    if(isset($_SESSION['usuario'])){
        $nombreUsu = $_SESSION['usuario'];
        $mensaje = "¡Bienvenido, $nombreUsu!";
    }elseif (isset($_COOKIE['bienvenida'])){
        $mensaje = "¡Hola de nuevo, " . htmlspecialchars($_COOKIE['bienvenida']) . "!";
    }else{
        header("Location: index.php");
        exit;
    }
    // Actualizar la hora de último acceso
    $_SESSION['ultimoAcceso'] = time();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Bienvenida</title>
</head>
<body>
    <h2><?php echo $mensaje; ?></h2>
    <p>Has iniciado sesión correctamente.</p>
    <a href="logout.php"><button>Cerrar Sesión</button></a>
</body>
</html>