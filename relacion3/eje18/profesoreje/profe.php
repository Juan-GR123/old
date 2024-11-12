<?php
    $empleados = [
        101 => ['Nombre' => 'Juan', 'Salario' => 55000],
        102 => ['Nombre' => 'Pedro', 'Salario' => 35000],
        103 => ['Nombre' => 'Luis', 'Salario' => 22000],
        95 => ['Nombre' => 'Reina', 'Salario' => 12000],
        97 => ['Nombre' => 'Raúl', 'Salario' => 60000],
    ];

    function aumentarSalario($empleado){
        if ($empleado['Salario'] < 50000) 
            $empleado['Salario'] *= 1.10; 
        return $empleado;
    }

    function mostrarSalario($empleados){
        foreach ($empleados as $id => $empleado) {
            echo "<br> El id {$id} del empleado {$empleado['Nombre']} gana {$empleado['Salario']} euros.";
        }
    }

    mostrarSalario($empleados);

    // 1. Aumento del salario en un 10% salvo aquellos que ganan más de 50000
    echo "<h1> Aumento el salario un 10% </h1>";
    $empleados = array_map('aumentarSalario',$empleados);
    mostrarSalario($empleados);

    // 2. Ordeno por ID
    echo "<h1> Los ordeno </h1>";
    ksort($empleados);
    mostrarSalario($empleados);

    //3. 3 empleados con salario más alto
    echo "<h1> Muestro los 3 salarios más altos </h1>";
    $array=[];
    foreach($empleados as $key =>$salario){
        $array[$key]= ["Salario" => $salario["Salario"], "Nombre" =>$salario["Nombre"]];//se cambian de posicion
        //el nombre y el salario para que asi se cuente primero el dinero para ordenar el array
    }
    arsort($array);
    $top3=array_slice($array,0,3,true);
    mostrarSalario($top3);
?>