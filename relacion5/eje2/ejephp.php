<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*Vamos a modificar el formulario de login.

        El nuevo formulario se encarga de comprobar los datos introducidos y, 
        según sean correctos o no, da acceso al sistema al usuario o muestra  un mensaje de error.  

        Como aún no usamos bases de datos simularemos un formulario de login 
        donde hay que comprobar que el usuario y la contraseña son correctos. 
        Si el usuario es "usuario" y la clave es "1234", se redirige a la página del 
        ejercicio inicial donde dábamos de alta a un usuario.  

        En caso contrario, lo hace a una página de error. */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario = $_POST['usuario'] ?? '';
        $contrasena = (int)$_POST['contrasena'] ?? 0;


        if ($usuario === "usuario" && $contrasena === 1234) {
            header("location:http://localhost/old/relacion5/eje1/index.php");
            exit();	// Es recomendable usar exit después de redirigir
        } else {
            header("location:http://localhost/old/relacion5/eje2/error.php");
            exit();	// Es recomendable usar exit después de redirigir
        }
    }
    ?>
</body>

</html>