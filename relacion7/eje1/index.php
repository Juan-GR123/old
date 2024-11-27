<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos de coche</h1>
    <?php
    require_once 'coche.php';

    
    $coche=new Coche();
    echo $coche;

    ?>
    <h2>Cambiamos el color del coche y lo ponemos amarillo</h2>
    <?php 
    $coche->setColor("Amarillo");
    echo $coche;
    ?>


    <h2>Mi coche va ha acelerar 4 veces y a frenar una vez</h2>
    <?php 
    for($i=0;$i<4;$i++){
        $coche->acelerar();
    }
        $coche->frenar();

        echo $coche->getVelocidad();
    ?>
    <h2>Creamos un nuevo coche su color sera verde y modelo gallardo</h2>
    <?php 
    $coche2=new Coche(color:"verde",modelo:"gallardo");
    echo $coche2;
    ?>
    <h2>Datos de nuevo coche</h2>
    <?php 
    echo $coche2;
    ?>
</body>
</html>