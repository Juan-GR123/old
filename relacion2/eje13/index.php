<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 
    function ejemplos($cadena){
        //1
        echo "Cadena original: " . $cadena ."<br>";
        //2
        echo "Los doce primeros caracteres: " . substr($cadena,0,12) . "<br>";
        //3
        echo "La longitud de la cadena es de " . strlen($cadena) ."<br>";
        //4
        $mayuscula="M";
        echo "Buscamos la posición en la que empieza la palabra Mundo con la M mayscula: " . strpos($cadena,$mayuscula) ."<br>";
        //5
        $minuscula="m";
        echo "Buscamos la posición en la que empieza la palabra mundo con la m minuscula: " . strpos($cadena,$minuscula) ."<br>";
        //6
        echo"Convertimos a mayusculas: " . strtoupper($cadena) ."<br>";
        //7
        echo "Convertimos a mayusculas con UTF-8: ". mb_strtoupper($cadena,'UTF-8')."<br>";//para convertir tildes
        //8
        echo "Todo a minusculas: " . strtolower($cadena)."<br>";
        //9
        //$punto= explode("mundo",$cadena);
        //echo "Devuelve a partir de un punto: " . $punto[1] ."<br>";
        //echo "<br> La cadena a partir del punto es: " .strstr($cadena, '.') . "<br>";
        function strstrstr($str){
            $r="";
            $found = false;
            for($i = 0; $i < strlen($str); $i++){
                if($str[$i] == "."){
                    $found = true;
                }
                if($found){
                    $r .= $str[$i];
                }
            }
            return $r;
        }
        echo "La cadena desde el punto final (incluido) con funcion no predefinida es: " . strstrstr($cadena) . "<br>";

      
        //10
        echo "La cadena al revés: " . strrev($cadena) ."<br>";


        function mb_strrev($str){
            $r = '';
            for ($i = mb_strlen($str); $i>=0; $i--) {
                $r .= mb_substr($str, $i, 1);
            }
            return $r;
        }
        echo "La cadena del revés con función no predefinida es: " . mb_strrev($cadena);
    };
    $cadena="Hola, mundo. ¿Que tál estás hoy?";
    ejemplos($cadena);
    ?>
</body>
</html>