<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea inventada</title>
</head>
<body>
    <?php 
    //Dame un numeros el cual se vaya constantemente modificando

    function DuplicarNegativo(float &$numero): ? string{	
        if($numero<=0){
            $resultado=$numero*2;
            $numero=$resultado;
            return $resultado;
        }else{
            return "no se puede usar un número positivo";
        }
    }
    $numero=-12;
    echo "El doble de " .$numero ." es ".  DuplicarNegativo($numero) . "<br>";
    echo "El doble de " .$numero ." es ".  DuplicarNegativo($numero) . "<br>";

    ?>
</body>
</html>