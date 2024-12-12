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

        session_start();//iniciar sesion

        if(!isset($_COOKIE['nombre'])){
            setcookie("nombre","true",time()+(86400*7));
        }

        if(!isset($_COOKIE['contrasenia'])){
            setcookie("constrasenia","true",time()+(86400*7));
        }


    ?>

        <link rel="stylesheet" href="../relacion6/css/estilos.css">
        <form method="post" action="index.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="contrasenia">Contraseña:</label>
            <input type="password" id="contrasenia" name="contrasenia" required><br><br>

            <input type="submit" value="Iniciar sesión">
            <!-- <button>Iniciar sesion</button>-->
        </form>
</body>
</html>