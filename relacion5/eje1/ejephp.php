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
        // Capturar los datos enviados desde el formulario
        $nombre = $_POST['nombre'] ?? '';//las ?? se encargan de que no sea null
        $apellidos = $_POST['apellidos'] ?? '';
        $fecha_nacimiento = $_POST['fecha_nacimiento'] ?? '';
        $correo = $_POST['correo'] ?? '';
        $lenguajes = $_POST['lenguajes'] ?? [];
        $sabe_web = $_POST['sabe_web'] ?? '';
        $comentarios = $_POST['comentarios'] ?? '';
        $contrasena = $_POST['contrasena'] ?? '';
        $repite_contrasena = $_POST['repite_contrasena'] ?? '';

        // Mostrar la información
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Apellidos:</strong> $apellidos</p>";
        echo "<p><strong>Fecha de Nacimiento:</strong> $fecha_nacimiento</p>";
        echo "<p><strong>Correo Electrónico:</strong> $correo</p>";
        echo "<p><strong>Lenguajes de Programación Conocidos:</strong> " . implode(', ', $lenguajes) . "</p>";
        echo "<p><strong>¿Sabe crear páginas web estáticas?:</strong> $sabe_web</p>";
        echo "<p><strong>Comentarios:</strong> $comentarios</p>";

        // Validar las contraseñas
        if ($contrasena === $repite_contrasena) {
            echo "<p><strong>Contraseña:</strong> La contraseña coincide.</p>";
        } else {
            echo "<p><strong>Contraseña:</strong> La contraseña no coincide.</p>";
        }
    } else {
        echo "<p>No se ha enviado ningún dato.</p>";
    } 
    ?>
       <br>
       <a href="index.php">Volver al formulario de alta</a>
</body>
</html>