<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <table border="2px">
        <legend>Tabla ingles- español</legend>
        <br>
    </table>
        <?php 
        $num_esp=array("uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez");
        $num_eng=array("one","two","three","four","five","six","seven","eight","nine","ten");

        for($i= 0;$i<count($num_esp);$i++){
            echo("<tr>"."<td>" .$num_esp[$i] . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ."<td>" . $num_eng[$i] . "</td>" . "</tr>");
            echo "<br>";
        }

        $numeros=[
            1=> ["One","uno"],
            2=> ["two","dos"],
            3=> ["three","tres"],
            4=> ["four","cuatro"],
            5=> ["five","cinco"],
            6=> ["six","seis"],
            7=> ["seven","siete"],
            8=> ["eight", "ocho"],
            9=> ["nine","Nueve"],
            10=> ["ten","diez"]    
        ];

        echo "<table>";
        echo "<tr><th>Ingles</th><th>Español</th>";
        foreach($numeros as $numero){
            echo("<tr><th>$numero[0]</th><th>$numero[1]</th></tr>");
        }
        echo "</table>";
        ?>
    </body>
</html>