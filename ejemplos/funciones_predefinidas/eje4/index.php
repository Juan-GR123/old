<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="valor1">Introduce una frase: </label>
        <input type="character" id="valor1" name="valor1"><br>

        <label for="valor2">Introduce una palabra: </label>
        <input type="character" id="valor2" name="valor2"><br>  

        <input type="submit" value="Enviar">
    </form>
    <?php 
     /*4. Pide al usuario que ingrese una frase y una palabra, luego usa strpos() para determinar
    si la palabra está presente en la frase. Si la palabra está, indica en qué posición empieza; 
    si no, muestra un mensaje de error. Resuélvelo ahora usando la función str_contains().*/

    if ((isset($_POST['valor1']) && !empty($_POST['valor1'])) 
     && (isset($_POST['valor2']) && !empty($_POST['valor2']))) {//isset determina que la variable este definida
        $valor1 = htmlspecialchars($_POST['valor1']);
        $valor2 = htmlspecialchars($_POST['valor2']);
        $valor3 = strpos($valor1,$valor2);
        if($valor3==true){
            echo "La posicion en la que se encuentra " . $valor2 . " dentro de la frase " 
            . $valor1 ." es " . $valor3 . "<br>";
        }else{
            echo "La palabra no fue encontrada";
            echo "<br>";
        }
       

        $valor4=str_contains($valor1,$valor2) == true ? " La palabra se encuentra dentro de la frase" :
         " la palabra no se encuentra dentro de la frase ";

        echo $valor4;

    }
    ?>
</body>
</html>