<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php 
         echo"<table>";
         echo "<caption>";
         echo "tabla de los 20 primeros números";
         echo "</caption>";
         echo "<thead>";
         echo "<tr>";
         echo "<th>Decimal</th>";
         echo "<th>Binario</th>";
         echo "<th>Octal</th>";
         echo "<th>Hexadecimal</th>";
         echo "</tr>";
         echo "</thead>";
        for ($i = 0; $i <= 20; $i++) {
            $decimal=(float) $i;
            $decimal2=$decimal;
            $binario=decbin($i);
            $hexadecimal=dechex($i);
            $octal=decoct($i);
            echo "<tbody>";
            echo"<tr>";
            echo "<th>$decimal</th>";
            echo "<th>$binario</th>";
            echo "<th>$octal</th>";
            echo "<th>$hexadecimal</th>";
            echo "</tr>";
           echo "</tbody>";
           //otra forma
          /* echo "<tbody>";
           echo"<tr>";
           echo "<th>";
           printf($i);
           echo "</th>";
           echo "<th>";
           printf("%b", $i);
           echo "</th>";
           echo "<th>";
           printf("%o", $i);
           echo "</th>";
           echo "<th>";
           printf("%X", $i);
           echo "</th>";
           echo "</tr>";
          echo "</tbody>";*/
        }
        echo "</table>";
       
        ?>
    </body>
</html>