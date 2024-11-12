<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Tema 3</title>
</head>
    <body>
    <?php
// Definir las operaciones como short closures
$sumar = fn($a, $b) => $a + $b;
$restar = fn($a, $b) => $a - $b;
$multiplicar = fn($a, $b) => $a * $b;
$dividir = fn($a, $b) => ($b != 0) ? $a / $b : "Error: División por cero";

// Función calculadora usando funciones variables
function calculador($num1, $num2, $operacion) {
    global $$operacion; // Referencia a la función variable a través de la variable dinámica
    if (isset($$operacion)) {
        return $$operacion($num1, $num2);
    } else {
        return "Error: Operación no válida.";
    }
}

// Recoger los valores desde la URL
//http://localhost/old/relacion2/eje2_3/index.php?num1=10&num2=5&operacion=multiplicar
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operacion'])) {
    $num1 = urlencode($_GET['num1']);
    $num2 = urlencode($_GET['num2']);
    $operacion = urlencode($_GET['operacion']);
//$operacion="sumar"
//$$operacion=sumar
//'sumar'=sumar
    // Comprobar que los números son válidos
    if (is_numeric($num1) && is_numeric($num2)) {
        // Llamar a la función calculadora
        echo "Resultado: " . calculador($num1, $num2, $operacion);
    } else {
        echo "Error: Ambos valores deben ser numéricos.";
    }
}
?>

        
    </body>
</html>