<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*14. Dada la frase “Bienvenidos a la aventura de aprender PHP en 30 horas” utilizar
    funciones de cadena para:

    • Mostrar la parte central de la frase
    • Averiguar la posición de la palabra PHP
    • Reemplazar la palabra “aventura” por la cadena “<b>misión</b>”.  */

    $cadena="Bienvenidos a la aventura de aprender PHP en 30 horas";//la posicion 26 es la de la mitad

    echo "La palabra central de la frase es: <br>" .substr($cadena,26,2) . "<br><br>";
    //Averiguar la posición de la palabra PHP

    echo "La posicion de la palabra PHP es:<br> ". strpos($cadena,"PHP") ."<br><br>";

    //Reemplazar la palabra “aventura” por la cadena “<b>misión</b>”.
    echo "Vamos ha reemplazar la palabra aventura: <br><br>" . str_replace("aventura","mision",$cadena);
    //(a,b,c)
    //a= lo que vas ha sustituir
    //b=por lo que vas a sustituir la anterior variable
    //c=la cadena que lleva lo que vas ha sustituir
    ?>
</body>

</html>