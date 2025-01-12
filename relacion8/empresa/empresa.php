<?php

session_start();

$_SESSION['errorInicioSesion'] = $_SESSION['errorInicioSesion'] ?? 0; // Guardo el error de inicio de sesión
$_SESSION['ultimoIntento'] = $_SESSION['ultimoIntento'] ?? time(); // Guarda el tiempo del último intento


//Establecemos la conexión con config.php y conexion.php
require_once 'config/config.php';
require_once 'lib/conexion.php';

$conexion = new Conexion();
$pdo = $conexion->getPdo();

// Formulario de Registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register']) && $_SESSION['errorInicioSesion'] < 3) {
    // Compruebo que el email es válido
    $email = filter_var(trim($_POST['email_register']), FILTER_VALIDATE_EMAIL);
    // Quito los espacios en blanco al comienzo y final de la contraseña
    $password = trim($_POST['password_register']);

    if ($email && $password) {
        $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Si no existe el email en la base de datos, se registra
        if ($stmt->rowCount() == 0) {
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            // INSERT INTO tabla (columna1, columna2, ...) VALUES (valor1, valor2, ...);
            $stmt = $pdo->prepare("INSERT INTO usuarios (email, password_hash) VALUES (:email, :password_hash)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password_hash', $password_hash);
            $stmt->execute();
            echo "Registro exitoso!";
        } else {
            echo "El email ya está registrado.";
        }
    } else {
        echo "Por favor completa todos los campos de registro.";
    }
}

    //iniciar sesion
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login']) && $_SESSION['errorInicioSesion'] < 3) {
        // Compruebo que el email es válido
        $email = filter_var(trim($_POST['email_login']), FILTER_VALIDATE_EMAIL);
        // Quito los espacios en blanco al comienzo y final de la contraseña
        $password = trim($_POST['password_login']);

        if ($email && $password) {
            $sql = "SELECT id FROM usuarios WHERE email = :email";

            $stmt = $pdo->prepare($sql); //Preparamos la consulta para que se realice en modo seguro
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() == 1) {//rowCount te dice si la consulta devuelve algo
                $user = $stmt->fetch();
                $verify=password_verify($$password,$user['password_hash']);
                if($verify){
                    $_SESSION['errorInicioSesion'] = 0;
                    $_SESSION['rol'] = $user['rol'];
                    $_SESSION['nombre'] = $user['email'];
                    header('Location: index.php');
                    exit();
                }
            }else{
                $_SESSION['errorInicioSesion']++;
                $_SESSION['ultimoIntento'] = time(); // Registro la hora del último intento fallido
            }
        } else {
            echo "Email no registrado.";
        }
    }else{
        echo "Por favor, vuelve a introducir las credenciales";
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
<h2>Registrosss</h2>
<form method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email_register">
    <label for="password_register"> Contraseña: </label>
    <input type="password" name="password_register">
    <input type="submit" name="register" value="Registrar">
</form>


  <?php if ($_SESSION['errorInicioSesion'] < 3) { ?>
        <h1>Iniciar Sesion</h1>
        <form method="POST">
            <label for="email_login">Email:</label>
            <input type="text" id="email_login" name="email_login"><br><br>

            <label for="password_login">Contraseña:</label>
            <input type="password" id="password_login" name="password_login"><br><br>
            <input type="submit" name="login" value="Iniciar Sesion">
        </form>
    <?php
    } else {
     echo "<h2>Has superado los intentos permitidos</h2>";
    }
    ?>
</body>

</html>