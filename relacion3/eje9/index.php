<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Escribe un programa que guarde en un array los nombres de las provincias de Andalucia.

 Usa la función unset() para borrar el elemento que desees de ese array. 
 Deberás pasarle a la función como parámetro el índice del elemento a borrar. 

Por ejemplo, puedes borrar la de índice 2. Nota: Si no pones el índice en la función unset() 
se borrarán todos los elementos del array */
        $provincias=["Granada","Sevilla","Malaga","Cordoba","Huelva","Jaen","Cadiz","Almeria"];
        $posicion=rand(0,7);
        function borrarProvincias(&$provincias,$posicion){//& hace lo mismo que $GLOBALS para que al devolver el array
            //despues de realizar la funcion el array siga conservando la falta del elemento
            if(array_key_exists($posicion,$provincias)){
                unset($provincias[$posicion]);
                echo "Si existe el indice $posicion <br>";
            }else{
                echo "No existe el indice $posicion <br>";
            }
            return $provincias;
        }
        echo "<h3>Provincias iniciales:</h3>";
        echo "<pre>";
        print_r($provincias);
        echo "</pre>";
        echo "<br>";
        borrarProvincias($provincias, $posicion);
        echo"<br>";
        echo "<h3>Provincias despues de eliminar:</h3>";
        echo "<pre>";
        print_r($provincias);
        echo "</pre>";
    ?>
</body>
</html>