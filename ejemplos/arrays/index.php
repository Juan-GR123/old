<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function recorre($numeros){
            foreach ($numeros as $indice => $valor) {//indice son las posiciones del array
                echo "$indice => $valor <br>";
            }
        }

        $numeros = ['uno'=> 1, 'dos' => 2, 'tres'=>3];
        recorre($numeros);
        $numeros=array_flip($numeros);
        recorre($numeros);

        $texto="blanco;rojo";
        $colores=explode(";", $texto);
        foreach($colores as $indice => $color){
            echo $color;
        }
    ?>
</body>
</html>