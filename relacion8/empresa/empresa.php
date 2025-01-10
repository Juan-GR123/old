<?php

session_start();

$_SESSION['errorInicioSesion'] = $_SESSION['errorInicioSesion'] ?? 0; // Guardo el error de inicio de sesión
$_SESSION['ultimoIntento'] = $_SESSION['ultimoIntento'] ?? time(); // Guarda el tiempo del último intento


//Establecemos la conexión con config.php y conexion.php
require_once "./config/config.php";
require_once "./Lib/conexion.php";

//Formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login']) && $_SESSION['errorInicioSesion'] < 3) {
    // Compruebo que el email es válido
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    // Quito los espacios en blanco al comienzo y final de la contraseña
    $contrasena = trim($_POST['contrasena']);

    if ($email && $contrasena) {
        $sql = "SELECT id FROM usuarios WHERE email = :email";

        $stmt = $pdo->prepare($sql); //Preparamos la consulta para que se realice en modo seguro
        $stmt->bindParam(':email', $email);
        $stmt->execute();

         // Si no existe el email en la base de datos, se registra
        if ($stmt->rowCount() == 0) {
            $contrasena_codigo = password_hash($password, PASSWORD_BCRYPT);

            $sql2 = "INSERT INTO usuarios (email, password_hash) VALUES (:email, :contrasena)";
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':contrasena_codigo', $password_hash);
            $stmt->execute();

            echo "Registro exitoso!";
        } else {
            echo "El registro ya esta registrado";
        }
    } else {
        echo "Por favor, completa todos los datos del registro";
    }


    //iniciar sesion
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login']) && $_SESSION['errorInicioSesion'] < 3) {
        
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../tiendas/css/estilos.css">
</head>

<body>
    <h1>Registro</h1>
    <form method="POST">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena"><br><br>
        <input type="submit" name="register" value="Registrar">
    </form>


    <?php if ($_SESSION['errorInicioSesion'] < 3) {?>
    <h1>Iniciar Sesion</h1>
    <form method="POST">
        <label for="email2">Email:</label>
        <input type="text" id="email2" name="email2"><br><br>

        <label for="contrasena2">Contraseña:</label>
        <input type="password" id="contrasena2" name="contrasena2"><br><br>
        <input type="submit" name="login" value="Iniciar Sesion">
    </form>
    <?php 
    }else{
        echo "<h2>Has superado los intentos permitidos</h2>";
    }
    ?>
</body>

</html>