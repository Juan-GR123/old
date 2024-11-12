<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
        //Fecha de hoy
            $hoy= strtotime("now"); 
          
            echo "La fecha de hoy es ". date("d/m/Y",$hoy) . "<br>";
           //echo "fecha de hoy: ". (date($hoy));
        //Fecha de ayer
        $ayer=strtotime("-1 day", $hoy);
        echo "La fecha de ayer fue ". date("d/m/Y",$ayer) ."<br>";
        //Fecha de mañana
        $mañana=strtotime("+1 day", $hoy);
        echo "La fecha de mañana será ". date("d/m/Y",$mañana)  ."<br>";
        ?>
    </body>
</html>