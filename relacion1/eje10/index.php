<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php 
        $resultado=0;
        for ($i= 0; $i <=100; $i++){
            if($i%2== 0){
                $resultado=$i . "<br>";
                echo $resultado;
            }
        }
        ?>
    </body>
</html>