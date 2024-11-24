<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Matriz de Números</title>
    <style>
        body {color: white;}
        .numero-negro { background-color: black; }
        .numero-verde { background-color: green; }
        .numero-azul { background-color: blue; font-weight: bold; }
        table { border-collapse: collapse; }
        td { padding: 10px; text-align: center; }
    </style>
</head>
<body>

<?php
/*Rellena un array bidimensional de 6 filas por 9 columnas con número enteros positivos
comprendidos entre 100 y 999 (ambos incluidos). Todos los números deben de ser
distintos, es decir, no se puede repetir ninguno. Muestra a continuación por pantalla el
contenido del array de tal forma que se cumplan los siguientes requisitos:
a. Los números de las dos diagonales donde está el mínimo deben aparecer en
color verde
b. El mínimo debe aparecer en color azul
c. El resto de los números deben de aparecer en color negro.
*/
// Dimensiones de la matriz
$filas = 6;
$columnas = 9;

// Rango de números aleatorios
$rangoMin = 100;
$rangoMax = 899;

// Generar una lista de números únicos
$numeros = range($rangoMin, $rangoMax);
shuffle($numeros); // Mezclar para aleatorizar

// Seleccionar solo los primeros 54 números
$numeros = array_slice($numeros, 0, $filas * $columnas);

// Crear la matriz y llenarla con los números
$matriz = array();
$indice = 0;
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $matriz[$i][$j] = $numeros[$indice++];
    }
}

// Encontrar el mínimo
$minimo = min($numeros);

// Mostrar la matriz con estilos
echo "<table border='1'>";
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $columnas; $j++) {
        $numero = $matriz[$i][$j];
        
        // Verificar la condición para aplicar el color
        if ($numero == $minimo) {
            $clase = "numero-azul"; // Mínimo en azul
        } elseif ($i == $j || $i + $j == $columnas - 1) {
            $clase = "numero-verde"; // Diagonales en verde
        } else {
            $clase = "numero-negro"; // Resto en negro
        }
        
        // Imprimir el número con la clase correspondiente
        echo "<td class='$clase'>$numero</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>