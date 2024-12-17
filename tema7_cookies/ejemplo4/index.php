<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   
 /**
 * Crear un sistema con las siguientes características:
 * Formulario de inicio de sesión con campos para usuario y contraseña.
 * Si el usuario inicia sesión correctamente:
 * Guardar su ID en una sesión.
 * Establecer una cookie de bienvenida que persista durante 7 días. 
 * Si la sesión o la cookie existen, mostrar un mensaje de bienvenida.
 * Implementar un botón para cerrar sesión, eliminando la sesión.
**/

    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $usuario = $_POST['usuario'] ?? '';
        $passwd = $_POST['password'] ?? '';
        $nombre = "sara";
        $con = "123";

        if($usuario === $nombre && $passwd === $con){
            $_SESSION['usuario'] = $usuario;

            setcookie('mensajeBienvenida', $usuario, time() + 7*24*60*60);

            header("Location: ejercicio4.php");
            exit;
        }else{
            echo "USUARIO O CONTRASEÑA INCORRECTOS.";
        }
    }

    if (isset($_GET['logout'])) {
        session_unset(); 
        session_destroy(); 
        setcookie('mensajeBienvenida', '', time() - 1, '/'); 
        header("Location: ejercicio4.php"); 
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php if (isset($_SESSION['usuario'])){ ?>
        <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h1>
        <p><a href="?logout=true">Cerrar sesión</a></p>
    <?php }else{ ?>
        <form method="POST">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button>Iniciar sesión</button>
        </form>
    <?php } ?>
</body>
</html>