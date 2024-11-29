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

        table,
        th,
        td {
            border: 2px solid black;
        }

        th,
        td {
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
    if ($_SERVER["REQUEST_METHOD"] == "GET") { //lo validamos

        //creamos los arrays
        $usuarios = [];

        $productos = [];

        $pedidos = [];




        //creamos funcion para comprobar DNI
        function comprobarDNI($dni)
        {
            // Expresión regular para verificar el formato: 4 números (0000-9999) seguidos de 3 letras (AAA-ZZZ)
            $patron = '/^[1-9]{8}[A-Z]{1}$/'; // /^=empieza la cadena $/= termina la cadena
            // Comprobar si la matrícula cumple con el patrón
            if (preg_match($patron, $dni)) { //comprueba si el segundo string sigue el patron del primero
                return true;
            } else {
                return false;;
            }
        }

        //Mostramos la funcion rellenaUsuarios
        function rellenaUsuarios()
        {
            global $usuarios; //asignamos el array usuarios global para que se guarden los valores
            $dni = "12345678S";
            $dni2 = "32456789L";
            $dni3 = "98742481K";
            if (comprobarDNI($dni)) {
                $usuarios = [
                    $dni => ["contrasenia" => "Queen123", "nombre" => "Pepe", "Edad" => 10, "tarjeta" => "4548812049400004"],
                    $dni2 => ["contrasenia" => "Algo432", "nombre" => "Alonso", "Edad" => 30, "tarjeta" => "4548812049400002"],
                    $dni3 => ["contrasenia" => "Nose462", "nombre" => "Pepa", "Edad" => 40, "tarjeta" => "4548812049400453"]
                ];
            }

            function rellenaProductos($numProductos)
            {
                global $productos;
                for ($i = 0; $i < $numProductos; $i++) { //Hacemos un bucle for para añadir tantos productos como se nos haya introducido
                    $productos[$i] = ["unidades" => rand(10, 20), "nombreProducto" => "producto" . str_pad($i + 1, 3, '0', STR_PAD_LEFT), "precio" => rand(1, 50)];
                }  //utilizamos el metod str_pad para añadir a producto tres numeros que en caso de no ocupar tantas posiciones se añadira 0 automaticamente 

            }

            //Mostramos la funcion rellenaPedidos
            function rellenaPedidos()
            {
                $contador = 3;
                global $pedidos;
                global $usuarios;
                global $productos;

                $dnifin = ["12345678S", "32456789L", "98742481K"];

                for ($i = 0; $i < 3; $i++) {

                    $posicion = rand(0, count($productos) - 1);
                    $cantidad = $productos[$posicion]["unidades"];
                    $precio = $productos[$posicion]["precio"];
                    $pedidos[$i] = ["dni" => $dnifin[0], "idProducto" => "producto" . str_pad($posicion + 1, 3, '0', STR_PAD_LEFT), "cantidad" => rand(1, $cantidad), "PrecioLinea" => $cantidad * $precio];
                }
                for ($i = 3; $i < 6; $i++) {
                    $posicion = rand(0, count($productos) - 1);
                    $cantidad = $productos[$posicion]["unidades"];
                    $precio = $productos[$posicion]["precio"];
                    $pedidos[$i] = ["dni" => $dnifin[1], "idProducto" => "producto" . str_pad($posicion + 1, 3, '0', STR_PAD_LEFT), "cantidad" => rand(1, $cantidad), "PrecioLinea" => $cantidad * $precio];
                }
                for ($i = 6; $i < 9; $i++) {
                    $posicion = rand(0, count($productos) - 1);
                    $cantidad = $productos[$posicion]["unidades"];
                    $precio = $productos[$posicion]["precio"];
                    $pedidos[$i] = ["dni" => $dnifin[2], "idProducto" => "producto" . str_pad($posicion + 1, 3, '0', STR_PAD_LEFT), "cantidad" => rand(1, $cantidad), "PrecioLinea" => $cantidad * $precio];
                }
            }

            //creamos funcion login
            function login($dni, $pw)
            {
                global $usuarios;
                if (empty($pw)) {
                    throw new Exception("ERROR DEL SISTEMA: La contraseña no puede estar vacia");
                } elseif (!comprobarDNI($dni)) {
                    throw new Exception("ERROR DEL SISTEMA: El dni es incorrecto");
                } else {
                    return isset($usuarios[$dni]) && $usuarios[$dni]["contrasenia"] === $pw; //te devuelve true o false
                }
            }

            //Creamos la funcion mostrarPedidos
            function mostrarPedidos($dniUsuario)
            {
                global $usuarios;
                global $productos;
                global $pedidos;
                $total = 0;
                echo "<table>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>ID Producto</th>";
                echo "<th>Cantidad</th>";
                echo "<th>Precio Linea(€)</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                foreach ($pedidos as $key => $values) {
                    if ($values["dni"] === $dniUsuario) {
                        echo "<tr>";
                        echo "<td>" . $values["idProducto"] . "</td>";
                        echo "<td>" . $values["cantidad"] . "</td>";
                        echo "<td>" . $values["PrecioLinea"] . "</td>";
                        echo "</tr>";
                        $total += $values["PrecioLinea"];
                    }
                }
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td>" . $total . "</td>";
                echo "</tr>";
                echo "</tbody>";
                echo "</table>";
            }
        }
    }

    ?>
</body>

</html>