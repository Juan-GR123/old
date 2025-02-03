<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baraja de Cartas</title>
</head>

<body>
    <?php

    if (!is_dir('assets/img')) {
        echo "No tenemos imágenes";
    } else {
        $barajaes = $baraja->getBaraja();
        foreach ($barajaes as $carta) {
            $image = "./assets/img/" . $carta->getPalo() . "_" . $carta->getNumero() . ".jpg";
            if (file_exists($image)) {
                echo "<img src='$image' />";
            } else {
                echo "No tenemos la imagen de esta carta";
            }
        }
    }
    ?>
</body>

</html>