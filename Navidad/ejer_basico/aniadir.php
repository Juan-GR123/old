<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*Ejercicio: "Gestión de Contactos"
    Descripción:
    Crea un programa en PHP que permita gestionar una lista de contactos. Cada contacto debe tener los siguientes datos:
    Nombre
    Apellido
    Email
    Teléfono

    El programa debe permitir al usuario realizar las siguientes acciones:

    Añadir un nuevo contacto.
    Listar todos los contactos.
    Guardar los contactos en un fichero.
    Cargar los contactos desde un fichero.
    */

    try {
        $fich = fopen("fichero.txt", "a");
        if ($fich == false) {
            echo "No se encuentra fichero_ejemplo.txt<br>";
        } else {
            echo "fichero_ejemplo.txt se abrió con éxito<br>";
        }
        fclose($fich);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nombre = $_POST['nombre'] ?? '';
            $apellidos = $_POST['apellidos'] ?? '';
            $correo = $_POST['correo'] ?? '';
            $telefono = $_POST['telefono'] ?? 0;


            function nuevoContacto($nombre, $apellidos, $correo, $telefono)
            {
                $fich2 = fopen("fichero.txt", "a");
                $contacto = $nombre . " " . $apellidos . " " . $correo . " " . $telefono . PHP_EOL; // Agregar salto de línea
                fwrite($fich2, $contacto);
                fclose($fich2);
                return "Contacto agregado: $contacto <br>";
            }

            echo nuevoContacto($nombre, $apellidos, $correo, $telefono);
            
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>

    <form method="post" action="" href="./css/estilos.css">
        <h1>Ejercicio inicial</h1>
        <p>Crea un formulario con el siguientes aspecto:</p>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos"><br><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo"><br><br>

        <label for="telefono">Telefono:</label>
        <input type="number" id="telefono" name="telefono"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>