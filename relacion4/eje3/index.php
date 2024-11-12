<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //ejercicio examen: practicar
        /*Crear una página que muestre un mensaje de bienvenida que dependa de la hora
        actual, de la siguiente manera (figura 4):
        • Si la hora se encuentra entre las 8 y las 13, mostrará ‘Buenos días’
        • Si la hora se encuentra entre las 14 y las 20, mostrará ‘Buenas tardes’
        • Si la hora se encuentra entre las 21 y las 7, mostrará ‘Buenas noches */

        function fecha($hora){
            return match(true){
                ($hora>=8) && ($hora<=13) => "Buenos dias",
                ($hora>=14) && ($hora<=20) => "Buenas tardes",
                ($hora>21) || ($hora<=7) => "Buenas Noches"
            };
        }

        function nombre($nombre,$hora){
            echo fecha($hora) . " " .$nombre;
        }

        $hora=2;
        $nombre="Max";

        nombre($nombre,$hora);

    ?>
</body>
</html>