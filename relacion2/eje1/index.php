<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
    $numero=5;
    function factorial($numero) {
        if($numero<=1){
           return 1;
        }else{
          return $numero*factorial($numero-1);//5*factorial(4)==5*4*3*2*1
        }
    }
    echo factorial($numero);
   ?>
</body>
</html>