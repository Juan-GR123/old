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
        <input type="submit" value="Enviar">
    </form>
    <?php 
      /*2. Solicita al usuario que ingrese una frase y convierte toda la cadena a minúsculas usando strtolower().
    Muestra el resultado al usuario.*/
    if (isset($_POST['valor1']) && !empty($_POST['valor1'])) {//isset determina que la variable este definida
       $valor1 = (string)htmlspecialchars($_POST['valor1']);

       $valor2 = strtolower($valor1);
       echo $valor2;
    }
    ?>
</body>
</html>