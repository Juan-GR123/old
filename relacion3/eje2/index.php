<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /* Crea un script que añada valores a un array mientras que su longitud sea menor que 120.

Después mostrará la información del array por pantalla*/ 
    $array=[];
    while(count($array)<120){
        $i=rand(1,50);
        array_push($array,$i);
    }
        print_r($array);
    ?>
</body>
</html>