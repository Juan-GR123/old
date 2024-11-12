<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php 
        $dado1=rand(1,6);
        $dado2=rand(1,6);

        if($dado1>$dado2){
            echo "El primer dado es mayor que el segundo";
            echo"<br>";
            echo "<br>";
            echo $dado1 . " es mayor que " . $dado2;
        }else if($dado1<$dado2){
            echo "El segundo dado es mayor que el primero";
            echo "<br>";
            echo"<br>";
            echo $dado2 . " es mayor que ". $dado1;
        }else{
            echo "Los dos dados tienen el mismo valor";
            echo "<br>";
            echo"<br>";
            echo $dado1 . " es igual que ". $dado2;
        }
        ?>
    </body>
</html>