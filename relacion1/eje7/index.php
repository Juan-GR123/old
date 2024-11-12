<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php 
            /*$piramide1 = "*********";
            $piramide2 = "&nbsp; &nbsp; * &nbsp;* &nbsp; * &nbsp; * &nbsp; * &nbsp; * &nbsp; *";
            $piramide3 = "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;* &nbsp;* &nbsp; * &nbsp; * &nbsp; *";
            $piramide4 = "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;* &nbsp;* &nbsp; *";
            $piramide5 = "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*";
            echo $piramide5;
            echo "<br>";
            echo $piramide4;
            echo "<br>";
            echo $piramide3;
            echo "<br>";
            echo $piramide2;
            echo "<br>";
            echo $piramide1;*/

            $niveles=5;

            for ($i = 1; $i <= $niveles ; $i++) {
                //espacios en blanco
                for ($j = $niveles-$i; $j > 0 ; $j--) {
                    echo "&nbsp;&nbsp;";
                }
                //asteriscos
                for ($k = 0; $k < (2 * $i -1) ; $k++) {
                echo "*";
                }
            echo "<br>";
            }
          
            
        ?>
    </body>
</html>