<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Simula el comportamiento de una pila utilizando arrays en PHP. 
    Primero, inserta un nuevo elemento al final del array usando array_push(). 
    Luego, extrae el último elemento de la pila con array_pop(). 
    Finalmente, voltea el array usando array_reverse() para mostrar los elementos en orden
     inverso al original.

Ejemplo: Considera un array de frutas ["manzana", "naranja", "pera"]. 
Debes insertar "plátano", luego extraer la última fruta y finalmente voltear el array restante. */
         $frutas=["manzana","naranja", "pera"];
         print_r($frutas);
         echo"<br>";
         array_push($frutas,"platano");
         print_r($frutas);
         echo "<br>";
         array_pop($frutas);
         print_r($frutas);
         echo "<br>";
         $frutas= array_reverse($frutas);
         print_r($frutas);
         echo "<br>";
    ?>
</body>
</html>