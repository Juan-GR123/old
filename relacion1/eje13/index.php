<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php 
        echo "<table border=2px>";
         for($i= 0; $i<10; $i++) {
            echo"<tr>";
            for( $j= 1; $j<10; $j++) {
                echo "<th>" . "$i * $j = " . ($i*$j) . "</th>";
            }
            echo "</tr>";
         }
         echo"</table>";
        ?>
    </body>
</html>