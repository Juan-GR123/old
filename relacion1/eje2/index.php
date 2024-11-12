<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <form method="post" action="">
            <label for="radio">Dime el radio de la circunferencia: </label>
            <input type="text" id="radio" name="radio">
            <br>
            <input type="submit" value="Enviar">
        </form>
        <?php
        $radio = null;
        if (isset($_POST["radio"]) && !empty($_POST["radio"])){
            $radio = (int)htmlspecialchars($_POST["radio"]);
        }
        $radio=(int)$radio;
        //esfera
        $superficie=4*pi()*($radio*$radio);
        echo "La superficie de la circunferencia es ". round($superficie) . "<br>";
         //Calcular de una circunferencia
        $longitud=2*pi()*$radio;
        echo "La longitud de una circunferencia es ". round($longitud) . "<br>";

        $volumen= (4/3) * pi() * ($radio*$radio*$radio);
        echo "El volumen de la circunferencia es " . round($volumen) . "<br>";
         //round();=Devuelve el valor redondeado con la precision especificada 
        //printf()= printf permite dar formato específico a la salida
        ?>
    </body>
</html>