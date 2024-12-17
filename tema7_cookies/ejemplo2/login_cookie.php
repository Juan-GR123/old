<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //crear un formulario de inicio de sesión:
    /*
        Crear el nombre de usuario de una cookie con un tiempo de expiración de 7 dias
        Almacene el contraseña en una cookie con un tiempo de expiración de 7 diaas
        Muestre un mensaje de bienvenida si la cookie existe 
        Permita al usuario cerrar sesión, eliminando la cookie
        */

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $usuario = $_POST['nombre'] ?? '';
        setcookie("usuario_login", $usuario, time() + 7 * 24 * 60 * 60); //7 dias
        header("Location: login_cookie.php"); //redirigir para evitar reenvio de formulario
        exit;
    }

    if (isset($_GET['logout'])) {
        // Eliminar las cookies estableciendo su tiempo de expiración en el pasado
        setcookie('usuario_login', "", time() - 1);
        header("Location: login_cookie.php");
        exit;
    }

    if (isset($_COOKIE['usuario_login'])) { ?>
        <h1>Bienvenido de nuevo,<?php echo htmlspecialchars($_COOKIE['usuario_login']); ?></h1>
        <a href="?logout=true">Cerrar Sesion</a><!--La interrogacion es para que coja correctamente la url-->
    <?php } else { ?>
        <link rel="stylesheet" href="../../relacion6/css/estilos.css">
        <form method="post" action="login_cookie.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <input type="submit" value="Iniciar sesión">
            <!-- <button>Iniciar sesion</button>-->
        </form>

    <?php   }
    ?>


</body>

</html>