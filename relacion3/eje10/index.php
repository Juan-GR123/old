<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php /*Crea un array asociativo (o diccionario) 
    con el censo de población de: España, Portugal, Francia, Italia y Grecia. */
    
    $paises=[
        "Español" => 4745081,
        "Portugues" => 512542,
        "Frances" =>345541,
        "Italiano" =>5344243,
        "Griego" =>5432542
      
    ];

        foreach($paises as $pais => $censo){
            echo $pais . " tiene una poblacion de " . $censo . "<br>" ;
        }
 
    ?>
</body>
</html>