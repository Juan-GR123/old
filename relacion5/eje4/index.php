<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    function metodo(&$alumnos){
        echo "Alumnos" . " ". "Nota<br>";
        arsort($alumnos);
        foreach($alumnos as $values){
          echo $values['Nombre'] . " ". $values['nota']."<br>";
        }
    }
      $alumnos = [ ['Nombre'=>'Jose','nota'=>10],
      ['Nombre'=>'Pedro','nota'=>8],
      ['Nombre'=>'Ana','nota'=>9],
      ['Nombre'=>'Cap','nota'=>10]];

  
      metodo($alumnos);
    ?>
        <h2>Añade un nuevo alumno:</h2>
    <form method="post" action="">
        <label for="Nombre">Nombre</label>
        <input type="text" id="Nombre" name="Nombre"><br><br>
        
        <label for="Nota">Nota:</label>
        <input type="text" id="Nota" name="Nota"><br><br>

        <input type="submit" value="Enviar">
    </form>
    <?php 
    
    if ((isset($_POST["Nombre"]) && !empty($_POST["Nombre"])) &&
    (isset($_POST["Nota"]) && !empty($_POST["Nota"]))) {
       $nombre1 = htmlspecialchars($_POST["Nombre"]);
       $nota1= htmlspecialchars($_POST["Nota"]);
       $array= ['Nombre'=>$nombre1,'nota'=>$nota1];
       array_push($alumnos,$array);
       
       }
       metodo($alumnos);
       
       function media($alumnos){
        $contador=0;
        foreach($alumnos as $values){
             $contador+= (int)$values['nota'];
          }
          $contador=$contador/count($alumnos);
          echo "media: " . $contador . "<br>";
       }
       media($alumnos);
       
    ?>
</body>
</html>