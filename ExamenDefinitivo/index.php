<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Hacer un try y catch-->
    <?php
    //Examen unidad 2 a 5
    //Se ha implementado la función login con los requisitos especificados (1 punto)
    include '';

    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['usuario']) && isset($_GET['contrasenia'])) {
        $usuario = $_GET['usuario'];
        $contraseña = $_GET['contrasenia'];
        try {
            if (login($usuario, $contraseña)) {

            } else {
                echo "Error: Usuario o contraseña incorrectos.";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {



    ?>
        <link rel="stylesheet" href="../relacion5/css/estilos.css">
        <form method="post" action="index.php">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required><br><br>
            <label for="contrasenia">Contraseña:</label>
            <input type="password" id="contrasenia" name="contrasenia" required><br><br>
           <!-- <input type="submit" value="Iniciar sesión">-->
            <button>Iniciar sesion</button>
        </form>
    <?php
    }

    ?>
</body>
</html>