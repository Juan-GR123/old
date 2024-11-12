<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php 
             /*$piramide1 = "*********";
              $piramide2 = "* &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; *";
              $piramide3 = "&nbsp; * &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *";
              $piramide4 = "&nbsp; &nbsp; * &nbsp;  &nbsp; &nbsp; *";
              $piramide5 = "&nbsp; &nbsp; &nbsp; &nbsp;   *";
              echo $piramide5;
              echo "<br>";
              echo $piramide4;
              echo "<br>";
              echo $piramide3;
              echo "<br>";
              echo $piramide2;
              echo "<br>";
              echo $piramide1;*/


              
            function showPyramid($heigh) {
                for ($i = 1; $i <= $heigh; $i++){
                    for ($j = 1; $j <= $heigh - 1; $j++){
                        echo "&nbsp;&nbsp;";
                    }

                    for ($k = 1; $k <= $i; $k++){
                        if($k==1 || $k==$i|| $i==$heigh){
                            echo "*&nbsp;&nbsp;";
                        }else{
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                        }
                    }
                    echo"<br>";
                }
               
            }
            echo showPyramid(5);
        ?>
    </body>
</html>