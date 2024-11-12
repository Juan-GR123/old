<html>

    <body>
            <?php
               /* echo "Hola Mundo ";
                //echo phpinfo();
                $mi_real=2.3;
                $mi_entero=3;
                $resultado=$mi_entero + $mi_real;
                echo "<br>";
                echo $resultado;
                echo "<br>";
                if($mi_entero===$mi_real){
                    echo 'Las variables son iguales';
                }
                echo 'las variables son iguales';
                echo "<br>";
                $mi_entero=1;
                $mi_string='2 flores';
                $resultado=$mi_entero.$mi_string;
                echo $resultado;

                echo "<br>";
                $mi_entero=1;
                $mi_string='2 flores';
                $resultado=$mi_entero+$mi_string;
                echo $resultado;

               echo "<br>";
                $mi_entero='jose';
                $mi_string='flores 4';
                $resultado=$mi_entero.$mi_string;
                echo $resultado;*/

                echo "<br>";
                $var=5;
                $$var=7;
                echo $var;
                /*echo "<br>";
                5echo $cinco;*/
                echo "<br>";
                echo $$var;
                /*echo "<br>";
                echo ${$var};*/

                echo "<br>";
                $mensaje_es="Hola";
                $mensaje_en="Hello";
                $idioma = "es";
                $mensaje = "mensaje_" . $idioma;
                echo $$mensaje;
                //$mensaje="mensaje_es"
                //$$mensaje="hola"
                //El $$ es 

                $a=2.5;
                $b=2;

                echo "<br>";
                echo "<br>";
                function prueba(): void{
                    global $a; //si no pongo el dolar la variable a es 
                    //null porque no esta definida en la función
                    $c=$a;
                    echo $c;
                }
                prueba();
                echo "<br>";


            ?>
    </body>
</html>

