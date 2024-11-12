<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
            <label for="cadena">Dime algo: </label>
            <input type="text" id="cadena" name="cadena"><br>
            <input type="submit" value="Enviar">
        </form>
    <?php
    //como hacer que se duplique despues de cada letra 
    function repetir($cadena){
        $resultado="";
        for ($i= 0; $i < strlen($cadena);$i++){
            $resultado.=$cadena[$i].$cadena[$i];
        }
        echo"<br>";
        echo "<br> La cadena que has introducido es: " . $cadena;
        echo "<br> la cadena duplicada es: " . $resultado;
        
    }
    if ((isset($_POST["cadena"]) && !empty($_POST["cadena"]))) {
        $cadena = htmlspecialchars($_POST["cadena"]);
        echo repetir($cadena);
        }
    ?>
</body>
</html>