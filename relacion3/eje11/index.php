<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 2px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>

</head>
<body>

    <?php 
    /*Guarda en un array tus 10 películas favoritas.
        Imprime en párrafos con el siguiente formato que incluye la posición de la película: ‘Película 4: Los Vengadores’
        Vuelve a mostrar las películas pero en lugar de párrafos usa una tabla.
        Añade un poco de CSS para mejorar el diseño. Cada título debe tener un color aleatorio.  */ 
        $pelicula=["RED","BLUE","GREEN","YELLOW","CRYSTAL","PEARL","DIAMOND","EMERALD","RUBY"];

        foreach($pelicula as $key => $peli){
            echo "Pelicula " . $key .": " . $peli ."<br>";
        }


        echo "<table>";
        
        echo "<thead>";
            echo "<tr>";
                echo "<th>posicion</th>";
                echo "<th>pelicula</th>";
            echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($pelicula as $key => $peli) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($key) . "</td>";
            echo "<td>" . htmlspecialchars($peli) . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    ?>
</body>
</html>