<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 2px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php 
   /* Utiliza arrays y funciones para escribir el código fuente, 
   en lenguaje PHP, que presente en el navegador del cliente esta página:*/
   $asignaturas=["Matematicas","lengua","fisica","latin","Ingles"]; 
   $tri1=[3,8,7,4,6];
    $tri2=[10,5,2,7,2];
    $tri3=[7,3,1,8,3];
    $media=[];


    for($i=0;$i<count($tri1);$i++){
        $media[$i]=($tri1[$i]+$tri2[$i]+$tri3[$i])/3;
        echo "<br> La media de asignaturas es " .round($media[$i],1);

        
    }
   
    echo "<table>";
        
        echo "<thead>";
            echo "<tr>";
                echo "<th>Asignaturas</th>";
                echo "<th>trimestre1</th>";
                echo "<th>trimestre2</th>";
                echo "<th>trimestre3</th>";
                echo "<th>media</th>";
            echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        for($i=0;$i<count($tri1);$i++){
            echo "<tr>";
            echo "<td>" . htmlspecialchars($asignaturas[$i]) . "</td>";
            echo "<td>" . htmlspecialchars($tri1[$i]) . "</td>";
            echo "<td>" . htmlspecialchars($tri2[$i]) . "</td>";
            echo "<td>" . htmlspecialchars($tri3[$i]) . "</td>";
            echo "<td>" . htmlspecialchars(round($media[$i],1)) . "</td>";
            echo "</tr>";
        }
        $mediatotal= ($media[0] + $media[1] + $media[2] + $media[3] + $media[4])/5;

        echo "</tbody>";
        echo "</table>";
        echo  "<br> <h2> La media final es " .round($mediatotal,1) . "</h2>";
    ?>
</body>
</html>