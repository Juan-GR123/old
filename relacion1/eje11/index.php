<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php 
        $contador=40;
        $contador2= 0;
        $contador3= 0;
            while($contador>0){
                $contador=$contador-1;
                $contador2++;
                $contador3= $contador2*$contador2;
                echo $contador3 . "<br>";
            }
        ?>
    </body>
</html>