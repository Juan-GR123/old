<?php
    session_start();

    $nombre = "sara";
    $con = "123";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $usuario = $_POST['usuario'] ?? '';
        $passwd = $_POST['password'] ?? '';

        if($usuario === $nombre && $passwd === $con){
            $_SESSION['usuario'] = $usuario;

            setcookie('bienvenida', $usuario, time() + 7*24*60*60);

            header("Location: bienvenida.php");
            exit;
        }else{
            echo "USUARIO O CONTRASEÑA INCORRECTOS.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php if (isset($_SESSION['usuario'])){ ?>
        <!-- <h1>Bienvenida, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h1> -->
        <!-- <p><a href="logout.php">Cerrar sesión</a></p> -->
    <?php }else{ ?>
        <form method="POST">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Iniciar sesión</button>
        </form>
    <?php } ?>
</body>
</html>
