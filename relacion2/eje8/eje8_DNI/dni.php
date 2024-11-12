<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
        <form method="POST" action=" ">
            <label> INTRODUCE EL DNI: </label>
            <input type="text" id="dni" name="dni">
            <input type="submit" value="enviar">
        </form>

        <?php
            function comprobarDNI($dni) {
                // Expresión regular para verificar el formato: 4 números (0000-9999) seguidos de 3 letras (AAA-ZZZ)
                $patron = '/^[1-9]{8}[A-Z]{1}$/';// /^=empieza la cadena $/= termina la cadena
                // Comprobar si la matrícula cumple con el patrón
                if (preg_match($patron, $dni)) {//comprueba si el segundo string sigue el patron del primero
                    return "La matrícula $dni es válida.";
                } else {
                    return "La matrícula $dni no es válida.";
                }
            }
            
            if (!empty($_POST['dni'])){
                $dni = htmlspecialchars($_POST['dni']);
                echo comprobarDNI($dni);
            }    
        ?>

    </body>
</body>
</html>