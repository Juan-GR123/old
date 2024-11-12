<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php 
        $a= 3;
        $b= -5;
        $c= -9;

        $x1=(-($b)+sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
        $x2=(-($b)-sqrt(($b*$b)-(4*$a*$c)))/(2*$a);
        echo "La primera solución es " . $x1;
        echo"<br>";
        echo "La segunda solución es ".$x2;
        echo "<br>";

        print("La primera solución es " . $x1 . "<br>");

        print("La segunda solución es". $x2 . "<br>");

        printf("La primera solución es " . $x1 . "<br>");

        printf("La segunda solución es". $x2 . "<br>");

        ?>
    </body>
</html>