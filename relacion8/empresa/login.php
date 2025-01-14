<?php
//1. iniciamos sesion
session_start();


//7. Definimos una variable de sesión para controlar los 3 intentos fallidos de inicio de sesion
$_SESSION['errorInicioSesion'] = $_SESSION['errorInicioSesion'] ?? 0;
$_SESSION['ultimoIntento'] = $_SESSION['ultimoIntento'] ?? time();


//Establecemos la conexión con config.php y conexion.php

require_once 'config/config.php';
require_once 'lib/conexion.php';

$conexion = new Conexion();
$pdo = $conexion->getPdo();

// Formulario de Registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    // Compruebo que el email es válido
    $email = filter_var(trim($_POST['email_register']), FILTER_VALIDATE_EMAIL);
    // Quito los espacios en blanco al comienzo y final de la contraseña
    $password = trim($_POST['password_register']);

    if ($email && $password) {
        $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Si no existe el email en la base de datos, se registra
        if ($stmt->rowCount() == 0) { //rowCount nos devuelve el ynumero de filas que hay en stmt
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

//6. Formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']) && $_SESSION['errorInicioSesion'] < 3) {
    // Compruebo que el email es válido
    $email = filter_var(trim($_POST['email_login']), FILTER_VALIDATE_EMAIL);
    // Quito los espacios en blanco al comienzo y final de la contraseña
    $password = trim($_POST['password_login']);


    if ($email && $password) {
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email= :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();



        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch(); //fetch mete en un array asociativo la consulta realizada
            //los indices son los atributos de la tabla
            if (password_verify($password, $user['password_hash'])) {
                $_SESSION['email'] = $email;
                $_SESSION['nombre'] = $user['Nombre'];
                $_SESSION['errorInicioSesion'] = 0;
                $_SESSION['rol'] = $user['rol'];
                header("Location:bienvenida.php");
                exit();
            } else {
                echo "Error: la contraseña no es correcta";
                $_SESSION['errorInicioSesion']++;
                $_SESSION['ultimoIntento'] = time(); //Guardo la hora del ultimo fallo

            }
        } else {
            echo "El email no existe en nuestra Base de Datos";
        }
    }
}

//7. controlamos los 3 intentos fallidos de inicio de sesión 
var_dump($_SESSION['errorInicioSesion']);
var_dump($_SESSION['ultimoIntento']);

if ($_SESSION['errorInicioSesion'] >= 3) {
    $tiempoRestante = time() - $_SESSION['ultimoIntento'];
    if ($tiempoRestante < 5) {
        //Bloqueo al usuario durante 5 segundos
        echo "<script>
        setTimeout(function() {
        window.location.reload();
        },5000);
        </script>";
    } else {
        //Hacemos un reset de los errores
        $_SESSION['errorInicioSesion'] = 0;
    }
}


//3. formulario de registro
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
    <h2>Registros</h2>
    <form method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email_register">
        <label for="password_register"> Contraseña: </label>
        <input type="password" name="password_register">
        <input type="submit" name="register" value="Registrar">
    </form>



    <?php
    if ($_SESSION['errorInicioSesion'] < 3) {
    ?>
        <h1>Iniciar Sesion:</h1>
        <form method="POST">
            <label for="email_login">Email:</label>
            <input type="text" id="email_login" name="email_login"><br><br>

            <label for="password_login">Contraseña:</label>
            <input type="password" id="password_login" name="password_login"><br><br>
            <input type="submit" name="login" value="Iniciar Sesion">
        </form>
    <?php
    } else { ?>
        <h1>Has introducido mal el login 3 veces. USUARIO BLOQUEADO DURANTE 5 SEGUNDOS</h1>
    <?php
    }
    ?>


</body>

</html>