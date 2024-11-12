<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post" action="">
            <label for="comprobar">Dime una contraseña: </label>
            <input type="text" id="comprobar" name="comprobar"><br>
            <input type="submit" value="Enviar">
        </form>
    <?php 
    //Escribe una función que reciba una cadena y comprueba si es una contraseña válida. Hay que comprobar que tenga: 
        //no se como hacer que se cumplan todas las condiciones
        function contrasenia($comprobar){
            $longitud=strlen($comprobar);
                // Comprobar si la matrícula cumple con el patrón
                if ($longitud<6 || $longitud>15) {//comprueba si el segundo string sigue el patron del primero
                    return "La contraseña debe tener entre 6 y 15 caracteres.";
                }
                if(!preg_match('/\d/',$comprobar)){//\d any digit
                    return "La contraseña debe contener al menos un número";
                }
                if(!preg_match('/[A-Z]/',$comprobar)){
                    return "La contraseña debe contener al menos una letra Mayuscula";
                }
                if(!preg_match('/[a-z]/',$comprobar)){
                    return "La contraseña debe contener al menos una letra minuscula";
                }
                if(!preg_match('/\W/',$comprobar)){//\W buscar cualquier caracter caracter que no sea alfanúmerico
                    return "La contraseña debe contener al menos un caracter";
                }
                return "La contraeña es valida";
        };
        if ((isset($_POST["comprobar"])) && (!empty($_POST["comprobar"]))) {
            $comprobar= htmlspecialchars($_POST["comprobar"]);
               echo contrasenia($comprobar);
            }
    ?>
</body>
</html>