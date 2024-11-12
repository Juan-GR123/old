<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php 
        function mcd($a,$b) {
            if($a<0  || $b < 0){
                return "Los números deben ser enteros positivos";
            }
            //aplicamos el algoritmo de Euclides
            while($b!=0){
                $temp=$b;
                $b=$a % $b;//resto de a divido por b
                $a = $temp;//asignamos el valor de b a a
            }
            return $a;//cuando b es 0, a contiene el MCD

        }
        $num1=150;
        $num2= 39;
        echo "El maximo comun divisor de $num1 y $num2 es " . mcd($num1,$num2);

    ?>
</body>
</html>