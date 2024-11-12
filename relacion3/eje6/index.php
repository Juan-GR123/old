<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Escriba un script que cree un array con 15 números aleatorios y los muestre en pantalla. 

A continuación, rotará los elementos de ese array una posición. Es decir, el elemento de la posición 0 debe pasar a la posición 1, el de al 1 a la 2, …, el elemento de la última posición pasará a la posición 0. 

Por último, mostrará el nuevo contenido del array. */


    /*//creo un array de 15 números aleatorios
    $tamaño=15;
    $array=[];
    for($i= 0;$i<$tamaño;$i++){
        $array[$i]=rand(1,10);
    }
    echo"Array antes de ser rotado <br>";
    foreach($array as $v){
        echo $v." ";
    }
    //rotación de los elementos del array(n=> n+1)
    $aux=$array[$tamaño - 1];
    for($i= $tamaño-1;$i>0;$i--){
        
        $array[$i]=$array[$i-1];
    }
    $array[0]=$aux;
    echo "<br>Array despues de haber rotado <br>";
    foreach($array as $v){
        echo $v." ";
    }*/

    $tamaño=15;
    $array=[];
    for($i= 0;$i<$tamaño;$i++){
        $array[$i]=rand(1,10);
    }
    $aux=array_pop($array);//coge el entero en la última posición
    array_unshift($array,$aux);//mueve el numero a la derecha
    print_r($array);
    ?>
</body>
</html>