<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //alt + shift + f ordenar
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre1 = htmlspecialchars($_POST["nombre"]);
        $telefono1 = htmlspecialchars($_POST["telefono"]);
        $direccion1 = htmlspecialchars($_POST["direccion"]);

        if (preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]*$/", $nombre1)) {
            echo "El nombre es $nombre1 <br>";
        } else {
            $error = "El nombre " . $nombre1 . " no es valido, vuelve a introducirlo <br>";
            echo "El nombre " . $nombre1 . " no es valido, vuelve a introducirlo <br>";
        }
        if (preg_match("/^[0-9]{9}$/", $telefono1)) {
            echo "El telefono es $telefono1 <br>";
        } else {
            $error = "El telefono " . $telefono1 . " no es valido, vuelve a introducirlo <br>";
            echo "El telefono " . $telefono1 . " no es valido, vuelve a introducirlo <br>";
        }
        if (filter_var($direccion1, FILTER_VALIDATE_EMAIL)) {
            echo "El correo es $direccion1 <br>";
        } else {
            $error = "El correo " . $direccion1 . " no es valido, vuelve a introducirlo <br>";
            echo "El correo " . $direccion1 . " no es valido, vuelve a introducirlo <br>";
        }
    }

    ?>
    <h2>Añade un nuevo amigo:</h2>
    <form method="post" action="">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <span style="color:red"><?php echo $error ?></span>
        <label for="telefono">Telefono:</label>
        <input type="number" id="telefono" name="telefono"><br><br>
        <span style="color:red"><?php echo $error ?></span>

        <label for="direccion">Direcci&oacute;n:</label>
        <input type="email" id="direccion" name="direccion"><br><br>
        <span style="color:red"><?php echo $error ?></span>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>