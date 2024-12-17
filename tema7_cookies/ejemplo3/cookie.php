<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Crear un script que permita:
    /*
    Autenticar al usuario con un formulario.
    Regenerar el ID de sesión despues de la autenticación 
    Mostrar un mensaje de bienvenida al usuario.
    Destruir la sesión despues de 5 minutos de inactividad
    Implementar un cierre de sesión manual que elimine todas las variables de sesión y la cookie
    */

    session_start();

    $mio1 = "Pepe";
    $mio2 = "Alho2";

    $tiempo_inactividad=5*60;

    if(isset($_SESSION['ultimoAcesso']) && (time() - $_SESSION['ultimoAcesso']> $tiempo_inactividad)){
        session_unset();
        session_destroy();
        header("Location: cookie.php");//Redirigir al formulario
        exit;
    }

    echo "El id es " .session_id() . "<br>";

    $_SESSION['ultimoAcesso'] = time();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $usuario = $_POST['nombre'] ?? '';
        $contrasena = $_POST['contrasena'] ?? '';
        if ($usuario == $mio1 && $contrasena == $mio2) {
            session_regenerate_id(true);
          

            $_SESSION['nombre']=$usuario;


            setcookie("usuario", $usuario, time() + 5 * 60, '/'); //5 minutos

            header("Location: cookie.php");
            exit;
        }else{
         echo "Usuario o contraseña incorrectos";
        }
      
    }

    if (isset($_GET['logout'])) {
        // Eliminar las cookies estableciendo su tiempo de expiración en el pasado
        session_unset();
        session_destroy();
        setcookie('usuario', "", time() - 1,'/');
        header("Location: cookie.php");
        exit;
    }



    if (isset($_COOKIE['usuario'])) { ?>
        <h1>Bienvenido de nuevo,<?php echo htmlspecialchars($_COOKIE['usuario']); ?></h1>
        <a href="?logout=true">Cerrar Sesion</a><!--La interrogacion es para que coja correctamente la url-->
    <?php } else { ?>
        <link rel="stylesheet" href="../../relacion6/css/estilos.css">
        <form method="post" action="cookie.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="constrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br><br>


            <input type="submit" value="Iniciar sesión">
            <!-- <button>Iniciar sesion</button>-->
        </form>

    <?php   }
    ?>

</body>

</html>