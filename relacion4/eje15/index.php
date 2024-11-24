<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Array bidimensional para tipos de colores
$colores = [
    "fuerte" => ["rojo", "azul", "amarillo"],
    "suave" => ["rosa", "celeste", "beige"]
];

// Mostrar el contenido del array
echo "<h2>Colores por tipo:</h2>";
foreach ($colores as $tipo => $listaColores) {
    echo "<strong>Colores $tipo:</strong><br>";
    foreach ($listaColores as $color) {
        echo "- $color<br>";
    }
}
?>
</body>
</html>