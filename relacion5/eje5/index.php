<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function calcular($actual,$fecha){
        return $actual->diff($fecha)->y;// Calcula la diferencia
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dia = $_POST['dia'] ?? '';
        $mes =  $_POST['mes'] ?? '';
        $anio =  $_POST['anio'] ?? '';
        $hoy = new DateTime(); // Fecha actual
        $fechaNacimiento = new DateTime("$anio-$mes-$dia"); // Fecha de nacimiento
        $edad = calcular($hoy,$fechaNacimiento);

        if($edad>=18 && $edad<=85){
            echo "<p>Puedes pasar<p>";
        }elseif($edad<18){
            echo "<p>Vete a casa a dormir<p>";
        }else{
            echo "<p>Lo sentimos pero creemos que este local no es para usted<p>";
        }
    }
    ?>

    <form method="post" action="">

        <label for="dia">Dime tu dia de nacimiento:</label>
        <input type="number" id="dia" name="dia" min="1" max="31"><br><br>

        <label for="mes">Dime tu mes de nacimiento:</label>
        <input type="number" id="mes" name="mes" min="1" max="12"><br><br>

        <label for="anio">Dime tu año de nacimiento:</label>
        <input type="number" id="anio" name="anio"><br><br>

        <input type="submit" value="Enviar">
</body>

</html>