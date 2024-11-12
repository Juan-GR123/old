<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>potencias</title>
</head>

<body>
    <?php 
    //Escribe una función para calcular potencias. 
    //La función recibirá como argumentos la base y el exponente. 
    //El exponente es opcional y tiene por defecto el valor 2
    function potencias($base,$exponente=2){
        return pow($base,$exponente);
    }
    $base=12;
    $exponente= 3;
    echo "<br>Llamada con exponente ->" . "$base elevado a $exponente es" . potencias($base,$exponente);
    echo "<br>Llamada sin exponente ->" . "$base elevado a 2 es" . potencias($base);
    ?>
</body>
</html>