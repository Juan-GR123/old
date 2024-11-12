<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Imagina que tienes un sistema de gestión de empleados donde cada empleado tiene un ID único, 
    su nombre, y su salario. El array que gestiona esta información es un array asociativo 
    donde la clave es el ID del empleado y el valor es otro array con su nombre y salario. 
    Deberás implementar las siguientes funcionalidades:

 */
    $empleados = [
        95 => ["nombre" => "Queen", "salario" => 12000],
        101 => ["nombre" => "Juan", "salario" => 45000],
        102 => ["nombre" => "Ana", "salario" => 55000],
        103 => ["nombre" => "Luis", "salario" => 50000],
        104 => ["nombre" => "Marta", "salario" => 60000],
    ];

    function mostraremple($empleados){
        foreach($empleados as $key => $empleado){
            echo $key ."=" .$empleado['nombre'] ."<br> Salario:  ". $empleado['salario'] ."<br>";
        }    
    }
//Aumenta el salario de todos los empleados en un 10%, excepto aquellos que ya ganan más de 50,000. Utiliza array_map() para realizar la operación.
function porcentaje($empleados){
        if($empleados["salario"] < 50000){
            $empleados["salario"] *= 1.10;
        }
        return $empleados;
}

//1
echo "<h1>Aumento el salario por 10%</h1>";
$mapeo=array_map('porcentaje',$empleados);//el array_map hace un foreach
print_r($mapeo);
echo "<br>";

//Asegúrate de que los IDs de los empleados estén en orden ascendente. 
//Utiliza ksort() para ordenar el array por las claves (IDs).
ksort($empleados);
echo "<br>";
echo "Segunda actividad: Ordenar ascendentemente sus ID <br>";
/*foreach($empleados as $key => $empleado){
    echo $key ."=" .$empleado['nombre'] . "<br>";
}*/
    mostraremple($empleados);

echo "<br><br>";
echo "Ordenar segun sus precios<br>";
//Devuelve una lista de los tres empleados con los salarios más altos, usando arsort() para ordenar por salario de mayor a menor y luego array_slice() para obtener los primeros tres.
    arsort($empleados);
    $final=array_slice($empleados,0,3,true);
    echo "<br>";
    echo "Cogemos las tres primeras posiciones<br>";
    mostraremple($final);
    ?>
</body>
</html>