<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //incluimos los metodos del fichero metodos.php
    include 'metodos.php';

    //para que sepamos que esta bien definido lo validaos con $SERVER["REQUEST_METHOD"]
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['dni']) && isset($_POST['contrasenia'])) {
        $dni = $_POST['dni'];
        $contraseña = $_POST['contrasenia'];
        echo $dni . "<br>"; //mostramos los valores introducidos
        echo $contraseña;
        try { //hacemos un try y catch en caso de que haya errores
            rellenaUsuarios(); //creamos el array usuarios
            rellenaProductos(20); //lo rellenamos de productos
            rellenaPedidos(); //y asignamos 3 productos a cada usuario
            if (login($dni, $contraseña)) {
                mostrarPedidos($dni); //en caso de que esten bien introducidos los valores mostramos la tabla de pedidos
                //ademas mas abajo añadiremos un enlace para volver al formulario
    ?>
                <p><a href="index.php">Regresar al formulario</a></p>
        <?php
            } else {
                echo "<br>Error: Usuario o contraseña incorrectos.";//En caso de no estar bien definidos los valores
                //Mostraremos este mensaje
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        ?>
        <link rel="stylesheet" href="../relacion6/css/estilos.css">
        <form method="post" action="index.php">
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" required><br><br>
            <label for="contrasenia">Contraseña:</label>
            <input type="password" id="contrasenia" name="contrasenia" required><br><br>

            <input type="submit" value="Iniciar sesión">
            <!-- <button>Iniciar sesion</button>-->
        </form>

    <?php
    }
    ?>
</body>

</html>