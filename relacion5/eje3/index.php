<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*Se pide un formulario que:

    solicite los siguientes datos: nombre, teléfono y email .
    al pulsar el botón enviar muestre la siguiente página.
    “¡Buenos días, nombre!

    Te voy a enviar spam a correo y te llamaré de madrugada a telefono.

    Enviado desde un iPhone” */

    ?>
     <link rel="stylesheet" href="../css/estilos.css">
        <form method="post" action="datos.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="telefono">Telefono:</label>
            <input type="text" id="telefono" name="telefono" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
           <!-- <input type="submit" value="Iniciar sesión">-->
            <button>Iniciar sesion</button>
        </form>
</body>

</html>