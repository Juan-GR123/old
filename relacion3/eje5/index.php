<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Escriba un programa que:

    Muestre un grupo de entre 20 y 30 animales al azar.
    Se usará un array para almacenar el código de los animales.
    El número de elementos del array será el determinado aleatoriamente entre 20 y 30.
    Tenga en cuenta que los animales son caracteres con rango Unicode: 128000 a 128060. 
    Por ejemplo, podría mostrar el siguiente resultado: 
    
    
    A continuación, mostrará un animal al azar de los que están incluidos en el 
    grupo anterior y lo eliminará del array. Por ejemplo: pulpo
    
    Por último, mostrará de nuevo el grupo inicial, 
    pero habiendo eliminado del grupo los animales que coincidan con el animal suelto
    (al menos habrá uno). También mostrará un mensaje con el número total de animales que quedan. 
    En el ejemplo anterior quedarían 21 animales. 
    Notas:

        uso de las funciones  rand(), array_rand(), unset.
        Crea las funciones que consideres oportunas.
    */
        $animales=[];
        $contador=rand(20,30);
        echo $contador ." animales<br>";
        while(count($animales) < $contador){
            array_push($animales,"&#" . rand(128000,128060));
        }
        foreach($animales as $value){
            echo $value ." ";
        }
        echo"<br><br>";

        //vamos a eliminar un animal al azar de los que estan en el array para eliminarlo
        echo"Animal a eliminar<br>";
        $aleatorio=rand(0,$contador-1);//las posiciones empiecan en 0 por eso se resta un valor por 1
        echo $animales[$aleatorio] . "<br><br>";
        $eliminar=$animales[$aleatorio];
        //unset($animales[$aleatorio]);

        for($i= 0;$i<$contador;$i++){
            if($animales[$i]==$eliminar){
                unset($animales[$i]);
            }

        }
         //mostramos el array sin el elemento
         foreach($animales as $value){
            echo $value ." ";
        }
    ?>
</body>
</html>