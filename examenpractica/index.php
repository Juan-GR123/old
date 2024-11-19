<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>
        <?php
        include 'datos.php';

        if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['usuario']) && isset($_GET['contraseña'])) {
            $usuario = $_GET['usuario'];
            $contraseña = $_GET['contraseña'];
            try {
                if (login($usuario, $contraseña)) {
                    escribeUsuario($usuario);
                    escribePrestamos($usuario);
                } else {
                    echo "Error: Usuario o contraseña incorrectos.";
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } else {



        ?>
            <form method="get" action="datos.php">
                <label for="usuario">Nombre:</label>
                <input type="text" id="usuario" name="usuario"><br><br>

                <label for="contrasena">Contraseña:</label>
                <input type="text" id="contrasena" name="contrasena"><br><br>

                <input type="submit" value="Enviar">
            </form>
        <?php
        }
        ?>

        <!--Hacer un try y catch-->
    </body>

</html>
</body>

</html>