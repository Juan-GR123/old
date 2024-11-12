<html>
    <body>
    <?php
        //Forma tradicional de declarar array
        $a = array("a" => "apple", "b" => "banana");
        $b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

        $c = $a + $b; // Union of $a and $b
        echo "Union of \$a and \$b:  ";
        print_r($c);
        echo "<br>";
        

        //sumo los arrya b+a e imprimo por pantalla el resultado
        $c = $b + $a; // Union of $b and $a
        echo "Union of \$b and \$a:  ";
        print_r($c);
        echo "<br>";

        $a += $b; // Union of $a += $b is $a and $b
        echo "Union of \$a += \$b:  ";
        print_r($a);
        echo "<br>";

         //Forma moderna de declarar array
         $d = ["a" => "apple","b" => "banana"];
         $e = ["a"=> "pear","b"=> "strawberry", "c"=> "cherry"];
        //sumo
        $c=$d+$e;
        print_r($c);
        echo "<br>";
        var_dump($c);

        //para imprimir el valor de una manzana
        echo "<br>";
        echo $d["a"];
?>

        <form method="post" action="">
            <label for="dia">¿Qué dia es hoy?: </label>
            <input type="text" id="dia" name="dia">
            <input type="submit" value="Enviar">
        </form>
        
        <?php
            $dia = null;
            if (isset($_POST['dia']) && !empty($_POST['dia'])) {
                $dia = (int)htmlspecialchars($_POST['dia']);
            }
            
            if ($dia !==null){
                echo match ($dia) {
                    1 => "Hoy es lunes",
                    2 => "Hoy es martes",
                    3 => "Hoy es miércoles",
                    4 => "Hoy es jueves",
                    5 => "Hoy es viernes",
                    6 => "Hoy es sábado",
                    7 => "Hoy es domingo",
                    default => "Ese día de la semana no existe",
                };
            }

        ?>

    </body>
</html>