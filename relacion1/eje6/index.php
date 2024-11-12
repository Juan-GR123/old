<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php 
      /*  function reverseString($caracter){
            $reverse="";
            foreach(str_split($caracter) as $char){
                $reverse= $char . $reverse;
            } 
            return $reverse;
        }
            echo reverseString($caracter)*/

            //otra forma
        /*$caracter="Hola mundo";
        $cadenaArray= str_split($cadena);
        $cadenaArrayRevertida=array_reverse($cadenaArray);

        $caracter=implode("",$cadenaArrayRevertida);
        echo ($caracter); */



        //otra forma
        $caracter="Hola mundo";
        $cadenainvertida="";
        for ($i= strlen($caracter)-1;$i>=0; $i--) {
                $cadenainvertida.=$caracter[$i];//podemos acceder a la posición que queramos del string
            }
            echo $cadenainvertida;
        ?>
    </body>
</html>