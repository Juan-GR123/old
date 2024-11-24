<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Tema 3</title>
</head>
    <body>
    
        <?php
        // Función para sumar dos números
   

        function sumar($num1, $num2) {
            return $num1 + $num2;
        }

        // Función para restar dos números
        function restar($num1, $num2) {
            return $num1 - $num2;
        }

        // Función para multiplicar dos números
        function multiplicar($num1, $num2) {
            return $num1 * $num2;
        }

        // Función para dividir dos números
        function dividir($num1, $num2) {
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Error: División por cero";
            }
        }

        // Función que recibe dos números y el nombre de la operación a realizar
        function calculador($num1, $num2, $operacion) {
            switch ($operacion) {
                case "+":
                    return sumar($num1, $num2);
                case "-":
                    return restar($num1, $num2);
                case "*":
                    return multiplicar($num1, $num2);
                case "/":
                    return dividir($num1, $num2);
                default:
                    return "Operación no válida";
            }
        }

        // Verificamos que los valores de los números y la operación estén presentes
        //http://localhost/old/relacion2/eje2/index.php?num1=10&num2=5&operacion=/
        if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operacion'])) {
            // Convertimos los parámetros a números
            $num1 = intval($_GET['num1']);//obtiene el valor entero de una variable
            $num2 = intval($_GET['num2']);
            $operacion = urlencode($_GET['operacion']);//Esta función es conveniente cuando se codifica una cadena a ser usada como la parte de consulta de una URL, como método práctico para pasar variables a la siguiente página.
            if($operacion!="+"){
                $operacion=urldecode($operacion); //se utilizan para revertir los cambios realizados por las funciones urlencode() y rawurlencode() correspondientes.
            }
            
            
            // Verificamos que los valores sean números válidos
            if ($num1 !== false && $num2 !== false) {
                // Llamamos a la función calculador con los parámetros
                $resultado = calculador($num1, $num2, $operacion);
                echo "El resultado de la operación es: $resultado";
            } else {
                echo "Error: Los valores proporcionados no son números válidos.";
            }
        } else {
            echo "Error: Faltan parámetros en la URL.";
        }              
        ?>
    </body>
</html>