<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
        <label for="valor1">Introduce una palabra: </label>
        <input type="character" id="valor1" name="valor1">
        <br>
        <label for="valor2">Introduce otra palabra</label>
        <input type="character" id="valor2" name="valor2">
        <input type="submit" value="Enviar">
    </form>
    <?php 
    /*1. Crea un formulario que permita ingresar dos palabras. 
    Usa la función strcmp() para comparar ambas cadenas. 
    Si las cadenas son iguales, muestra un mensaje que diga "Las cadenas son iguales".
     Si no lo son, indica cuál es mayor en el orden lexicográfico.*/
     if ((isset($_POST['valor1']) && !empty($_POST['valor1'])) 
     && (isset($_POST['valor2']) && !empty($_POST['valor2']))) {//isset determina que la variable este definida
        $valor1 = (string)htmlspecialchars($_POST['valor1']);
        $valor2 = (string)htmlspecialchars($_POST['valor2']);

        $valor3 = strcmp($valor1, $valor2);//los valores son contrarios a los que se consiguen con <==>
       // echo $valor3;
        if($valor3==0){
            echo "Las cadenas son iguales";
        }else if($valor3== -1){
            echo "La primera cadena es mayor que la segunda en el orden lexicografico";
        }else{
            echo "La segunda cadena es mayor que la primera en el orden lexicografico";
        }

     }
    ?>
</body>
</html>