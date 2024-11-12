<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Enunciado: Dado un array de números enteros, 
    se debe verificar si un número específico está presente en el array y, 
    además, contar cuántos elementos hay en dicho array. 
    Debes utilizar las funciones in_array() para realizar la búsqueda y count() para contar
    el número de elementos. El programa debe devolver si el número existe o no, y
    la cantidad total de elementos.

        Ejemplo: El array contiene los números [10, 20, 30, 40, 50]. 
        Se debe comprobar si el número 30 está presente y cuántos elementos hay en total en el array.*/
        
        $array_num=[10,20,30,40,50];    
        function verificar($array_num){
            if(in_array(30,$array_num)){
                echo "El numero 30 esta presente<br>";
            }else{
                echo "El número 30 no está presente en el array<br>";
            }
            echo "El número de posiciones del array es " . count($array_num);
        }
        verificar($array_num);
    ?>
</body>
</html>