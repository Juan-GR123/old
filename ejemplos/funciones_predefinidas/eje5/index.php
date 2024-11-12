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
    /*5. Pide al usuario que ingrese una frase y una palabra. Usa str_starts_with() para verificar si 
    la frase empieza con la palabra ingresada. Muestra un mensaje indicativo. Comprueba usando el método
    str_ends_with() si la frase termina con una determinada palabra. Igual que antes, muestra un mensaje 
    indicativo. */
    if ((isset($_POST['valor1']) && !empty($_POST['valor1'])) 
    && (isset($_POST['valor2']) && !empty($_POST['valor2']))) {//isset determina que la variable este definida
       $valor1 = (string)htmlspecialchars($_POST['valor1']);
       $valor2 = (string)htmlspecialchars($_POST['valor2']);
      $valor3 = str_starts_with($valor1,$valor2)==true ? "La frase comienza con la palabra ingresada" :
       "La frase no comienza con la palabra ingresada";
        echo $valor3;
        echo "<br>";
        $valor4=str_ends_with($valor1,$valor2) == true ? "La frase termina con la palabra ingresada" : 
        "La frase no termina con la palabra ingresada";
        echo $valor4;
        echo "<br>";
   }

    ?>
</body>
</html>