<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    function factorial($numero) {
        if($numero<0){
            throw new InvalidArgumentException("<br> El número no puede ser negativo");
        }
        if($numero<=1){
           return 1;
        }else{
            echo "<br> $numero ";
               return $numero*factorial($numero-1);//5*factorial(4)==5*4*3*2*1
             }
        }

    try{
        $numero=-2;
        echo "<br>El factorial de 5 es: " .factorial($numero);
    }catch(InvalidArgumentException $e){
        echo $e->getMessage();
    }

   ?>
</body>
</html>