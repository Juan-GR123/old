<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*Escriba un script PHP que:

    Guarde en un array 20 valores aleatorios entre 0 y 100.
    En un segundo array, llamado cuadrados, deberá almacenar los cuadrados de los valores que hay en el primer array.
    En un tercer array, llamado cubo, se deben almacenar los cubos de los valores que hay en el primer array.
    Por último, se mostrará el contenido de los tres arrays dispuesto en tres columnas paralelas. */
    $array = [];
    $cuadrados = [];
    $cubo = [];
    while (count($array) < 20) {
        $i = rand(1, 100);
        array_push($array, $i);
        $contador = $i * $i;
        array_push($cuadrados, $contador);
        $contadorcubo = $i * $i * $i;
        array_push($cubo, $contadorcubo);
    }

    function mostrararray($array, $array2, $array3){
        for ($i = 0; $i < count($array); $i++) {
            echo $array[$i] . " " . $array2[$i] . " " . $array3[$i];
            echo "<br>";
        }
    }


    /*echo "<table>";
        echo "<th>";
        echo "<td>Número</td>";
        echo "<td>Cuadrado</td>";
        echo "<td>Cubo</td>";
        echo "</th>";
    echo "</table>";*/
    echo mostrararray($array, $cuadrados, $cubo);
    ?>
</body>

</html>