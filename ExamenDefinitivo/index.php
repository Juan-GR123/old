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
    <!--Hacer un try y catch-->
    <?php
    //Examen unidad 2 a 5
    //Se ha implementado la función login con los requisitos especificados (1 punto)
    
    
    //include '';

    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['usuario']) && isset($_GET['contrasenia'])) {
        $usuario = $_GET['usuario'];
        $contraseña = $_GET['contrasenia'];
        try {
            if (login($usuario, $contraseña)) {

            } else {
                echo "Error: Usuario o contraseña incorrectos.";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {



    ?>
        <link rel="stylesheet" href="../relacion5/css/estilos.css">
        <form method="post" action="index.php">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required><br><br>
            <label for="contrasenia">Contraseña:</label>
            <input type="password" id="contrasenia" name="contrasenia" required><br><br>
           <!-- <input type="submit" value="Iniciar sesión">-->
            <button>Iniciar sesion</button>
        </form>
    <?php
    }


    /////////////////////////
    echo "<table>";

    echo "<thead>";
    echo "<tr>";
    echo "<th>isbn</th>";
    echo "<th>titulo</th>";
    echo "<th>Fecha ini</th>";
    echo "<th>Fecha Fin</th>";
    echo "<th>Retrasado</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($prestamos as $key => $values) {
        $valor = $values["isbn"];
        if ($values["usuario"] === $usu) {
            echo "<tr>";
            echo "<td>ISBN: " . $values["isbn"] . "</td> <td>titulo: " . $libros[$valor]["titulo"] .//$valor=$values["isbn"] para que coincida con la clave de libros
                " </td><td>Fechaini: " .  $values["fechaInicio"] . " </td><td>FechaFin: " . $values["fechaFin"] .
                "</td><td> Retrasado: " . retrasado(time(), $values["fechaFin"]) . "</td><br>";
            echo "</tr>";
        }
    }
    echo "</tbody>";
    echo "</table>";
    ?>
</body>
</html>