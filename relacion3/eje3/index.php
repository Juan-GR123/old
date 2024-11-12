<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Escribe un script que rellene un array con valores aleatorios (0,1) y lo muestre.
     A continuación, calcularemos su complementario y también la mostraremos. */ 
    function mostrararray($array){
        foreach($array as $valor){
            echo $valor . " ";
        }
    } 
         $array=[];
         $array2=[];
      for($i= 0;$i<rand(1,20);$i++){
        $contador=rand(0,1);
        array_push($array,$contador);

        if($array[$i]==1){
            array_push($array2,0);
        }else{
            array_push($array2,1);
        }
       // echo $array[$i] . "<br>";
       // echo $array2[$i] ."<br>";
      }
     
        echo mostrararray($array);
        echo "<br>";
        echo mostrararray($array2);
    ?>
</body>
</html>