<?php 
session_start();

require_once "./requires/conexion.php";

$_SESSION['errorInicioSesion'] = $_SESSION['errorInicioSesion'] ?? 0;
$_SESSION['ultimoIntento'] = $_SESSION['ultimoIntento'] ?? time();


//6. Formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['botonLogin']) && $_SESSION['errorInicioSesion'] < 3) {
    // Compruebo que el email es válido
    $email = filter_var(trim($_POST['emailLogin']), FILTER_VALIDATE_EMAIL);
    // Quito los espacios en blanco al comienzo y final de la contraseña
    $password = trim($_POST['passwordLogin']);


    if ($email && $password) {
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email= :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();



        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch(); //fetch mete en un array asociativo la consulta realizada
            //los indices son los atributos de la tabla
            if (password_verify($password, $user['password'])) {
                $_SESSION['errorInicioSesion'] = 0;
                header("Location:index.php");
                exit();
            } else {
                $_SESSION['errorPassLogin']="La contraseña no es correcta.";
                $_SESSION['errorInicioSesion']++;
                $_SESSION['ultimoIntento'] = time(); //Guardo la hora del ultimo fallo

            }
        } else {
            $_SESSION['errorEmailLogin']= "El email no existe en nuestra Base de Datos";
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


?>