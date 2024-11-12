<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>potencias</title>
</head>

<body>
        <form method="post" action="">
            <label for="numero">Dime un número: </label>
            <input type="text" id="numero" name="numero"><br>
            <label for="exponente">Dime el exponente de ese número: </label>
            <input type="text" id="exponente" name="exponente">
            <input type="submit" value="Enviar">
        </form>
    <?php 
         function potencias($numero,$exponente=2){
            return pow($numero,$exponente);
        }
        if ((isset($_POST["numero"]) && !empty($_POST["numero"])) &&
            (isset($_POST["exponente"]) && !empty($_POST["exponente"]))) {
            $numero = (int)htmlspecialchars($_POST["numero"]);
            $exponente=(int)htmlspecialchars($_POST["exponente"]);
                
            echo "<br>Llamada con exponente ->" . "$numero elevado a $exponente es " . potencias($numero,$exponente);
            echo "<br>Llamada sin exponente ->" . "$numero elevado a 2 es " . potencias($numero);
        }

       
    
    ?>
</body>
</html>