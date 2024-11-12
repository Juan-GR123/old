<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadena</title>
</head>
<body>
    <?php 
    /* Escribe una función que reciba un argumento.
    
    Dicha función comprobará:
        Si el argumento recibido es una cadena de caracteres:
        en dicho caso, verificará si está vacía y si es así devolverá:   
            "Este es el relleno porque estaba vacía"
        Si tiene contenido, devolverá la cadena recibida en mayúscula.
        Si el argumento no es un string devolverá el argumento recibido
     más el mensaje “no es una cadena de caracteres”. */    
     $argumentos="";
     function argumento($argumentos){
        if($argumentos===(string)$argumentos){
            if($argumentos===""){
                return "Este es el relleno porque estaba vacía";
            }else{
                return "La variable de texto no esta vacia, tiene contenido: " . strtoupper($argumentos);
            }
        }else{
            return $argumentos . " esto no es una cadena de caracteres";
        }
     }
     echo argumento($argumentos) . "<br>";
     echo argumento("Hola mundo") . "<br>";
     echo argumento(123) ."<br>";
    ?>
</body>
</html>