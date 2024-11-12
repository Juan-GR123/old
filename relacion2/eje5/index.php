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
            echo "<br> La fecha de hoy es " . $fecha->format('l, d \d\e F \d\e Y');
            //l: nombre del dia de la semana completo
            //D: nombre del dia de la semana incompleto
            //d: número del dia de la semana
            //\d\e: para que se muestre en pantalla de. Las \ sirven para que las letras se muestren en pantalla
            //F: Nombre del mes completo
            /*m: Numeric representation of a month, with leading zeros
              M: A short textual representation of a month, three letters
              n: Numeric representation of a month, without leading zeros
              t: Number of days in the given month
              */
            //Y: A full numeric representation of a year, at least 4 digits
            //y: A two digit representation of a year

            //echo "<br>" . strftime("%A,%d de %B de %Y", $fecha->getTimestamp()); //despreciado
           
    
    ?>
</body>
</html>