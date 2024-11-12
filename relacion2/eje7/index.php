<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post" action="">
            <label for="num">Dime un número: </label>
            <input type="text" id="num" name="num"><br>
            <input type="submit" value="Enviar">
        </form>
    <?php 
        function primo($num){
            if ($num <= 1) {
                return false;
            }
        
            // Verificar divisibilidad desde 2 hasta la raíz cuadrada del número
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false; // No es primo si es divisible por algún número
                }
            }
            return true; // Es primo si no es divisible por ningún número
        }
        if ((isset($_POST["num"]) && !empty($_POST["num"]))) {
        $num = (int)htmlspecialchars($_POST["num"]);
            $primosEncontrados=0;
        for ($x = 1; $x <= $num; $x++) {
            if (primo($x)) {
                $primosEncontrados++;
                echo "$x, ";//deja un espacio para el siguiente número
            }
        }
        
        echo "<br> Total de números primos encontrados entre 1 y " . $num . ": " . $primosEncontrados;
            
        }
        
    ?>
</body>
</html>