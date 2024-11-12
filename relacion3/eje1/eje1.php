<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Escribe un script que almacene un array de 8 números enteros:

a.      recorrerá el array y lo mostrará

b.       lo ordenará y lo mostrará

c.       mostrará su longitud

d.       buscará un elemento dentro del array

e.      buscará un elemento dentro del array, pero por el parámetro que llegue a la URL

Para mostrar los elementos del array en cada uno de los apartados se creará una función llamada mostrarArray(). */
       
//Creo un array de ocho enteros
        $array=[3,1,2,4,5,6,7,8];
        //a
        foreach($array as $value) {
            echo $value . " ";
            
        }
        echo "<br>";
        //b
        sort($array);
        foreach($array as $value) {
            echo $value . " ";
        }
         echo "<br>";
        //c
        echo "La longitud del tamaño del array es: " . count($array) . "<br>";
        //d
        $buscado=6;
        if(in_array($buscado, $array)) {
            echo "El número $buscado se encuentra en el array<br>";
        }else{
            echo "El número $buscado no se encuentra en el array<br>";
        } 
        
        //e
       
        $buscado= $_GET['valor'];
        if(in_array($buscado, $array)) {
            echo "El número $buscado se encuentra en el array<br>";
        }else{
            echo "El número $buscado no se encuentra en el array<br>";
        } 

    ?>
</body>
</html>