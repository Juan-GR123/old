<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Enunciado: Tienes un array de frutas en desorden y tu tarea es ordenarlas alfabéticamente usando 
    la función sort(). Después de ordenar el array, debes eliminar un elemento específico, 
    por ejemplo, "naranja", utilizando la función unset(). Finalmente, muestra el array
     resultante después de realizar ambas operaciones.

Ejemplo: El array contiene las frutas [manzana, naranja, plátano, pera]. 
Primero debes ordenarlas y luego eliminar "naranja". */
        $frutas=["manzana", "platano", "cereza","naranja", "pera"];
        print_r($frutas);
        echo "<br>";
        sort($frutas);
        print_r($frutas);
        echo "<br>";
        unset($frutas[array_search("naranja", $frutas)]);
        print_r($frutas);
      
    ?>
</body>
</html>