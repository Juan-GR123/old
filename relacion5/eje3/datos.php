<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //validar que el formulario esta puesto como post 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $contador = false;
        if (empty($_POST["nombre"])) {
            echo "El nombre es obligatorio.";
            $contador = true;
        } else {
            $nombre = $_POST['nombre'] ?? ''; //las ?? se encargan de que no sea null
        }
        if (empty($_POST["telefono"])) {
            echo "El telefono debe de ser obligatorio";
            $contador = true;
        } else {
            $telefono = $_POST['telefono'] ?? '';
            if (!preg_match("/^[0-9]{9}$/", $telefono)) {
                $contador = true;
                echo "El teléfono debe contener exactamente 9 dígitos.";
            }
        }

        if (empty($_POST["email"])) {
            echo "El email debe de ser obligatorio";
            $contador = true;
        } else {
            $email = $_POST['email'] ?? '';
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $contador = true;
                echo "El formato del correo es inválido.";
            }
        }

        if ($contador) {
            echo "<br>Algun apartado no se ha realizado correctamente";
        } else {
            // Mostrar la información
            echo "<p>¡Buenos dias $nombre!</p>";
            echo "<p>Te voy a enviar spam a $email y te llamaré de madrugada a $telefono.</p>";
            echo "<p>Enviado desde un iPhone</p>";
        }
    } else {
        echo "<p>No se ha enviado ningún dato.</p>";
    }
    ?>
</body>

</html>