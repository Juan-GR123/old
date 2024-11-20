<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    try {
        $fich = fopen("fichero_ejemplo.txt", "r");
        if ($fich === False) {
            echo "No se encuentra el fichero o no se pudo leer<br>";
        } else {
            while (!feof($fich)) {
                $car = fgetc($fich);
                echo $car;
            }
        }
        fclose($fich);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>
</body>

</html>