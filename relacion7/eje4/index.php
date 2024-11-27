<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
//El throw no funciona si lo pones en perro.php debido a que el include no se aplica hasta que
//se comprueba si el fichero existe

    try {

        if (!file_exists('perro.php')) {
            throw new Exception('El archivo perro.php');
        }
        include('perro.php'); //si lanza la excepción no hace el include
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    //crear el objeto labrador
    $labrador = new Perro("120", "Labrador", "Negro", "King");
    echo $labrador->mostrar_propiedades();
    echo "<br>"; //<br>

    //crear el caniche y hacer que hable
    $caniche = new Perro("20", "Caniche", "amarillo", "Pequeño");
    echo $caniche->mostrar_propiedades();
    echo "<br>";
    $caniche->speak();
    echo "<br>";




    //intenta cambiar la propiedad con validación
    $perro_error_message = $labrador->setNombre("Lulu");
    echo $perro_error_message ? "Nombre actualizado correctamente" : "Nombre no modificado";
    echo "<br>";

    //intenta cambiar la propiedad con validación
    $perro_error_message = $labrador->setNombre("NombredemasiadoLargocomoparaserValido");
    echo $perro_error_message ? "Nombre actualizado correctamente" : "Nombre no modificado";
    echo "<br>";


    // Crear una librería con más animales (ejemplo)
    $chihuahua = new Perro('Muy pequeño', 'Chihuahua', 'Marrón', 'Taco');
    $pastor_aleman = new Perro('Grande', 'Pastor Alemán', 'Negro y marrón', 'Rex');
    $chihuahua->mostrar_propiedades();
    echo "<br>";
    $pastor_aleman->mostrar_propiedades();
    echo "<br>";

    ?>
</body>

</html>