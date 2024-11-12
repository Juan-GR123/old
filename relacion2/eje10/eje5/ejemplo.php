<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
            setlocale(LC_TIME,"es_ES.UTF-8","es-ES","spanish");
            date_default_timezone_set('Europe/Madrid');
            //echo "Hoy es " . date("D/M/Y");

            $fecha=new DateTime('now');
            echo "<br> La fecha de hoy es " . $fecha->format('l, d\d\e F \d\e Y');//las \ imprimen en pantalla 
            //las letras que tienen dentro tal y como se escriben sin tener otro significado

            //echo "<br>" . strftime("%A,%d de %B de %Y", $fecha->getTimestamp()); //despreciado
           
    
    ?>
</body>
</html>