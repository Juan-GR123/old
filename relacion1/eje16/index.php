<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <p>Dime un valor</p>
        <!-- <a href="index.php?numero1=10&numero2=20">Valores entre 10 y 20</a><br><br>-->
    <form action="" method="get"><!--Si quieres cambiarlo a get cambia el metodo-->
    
    <input type="number" name="numero1">
    <br><br>
    <input type="number" name="numero2"><br><br>

    <input type="submit" name="Enviar" value="Enviar">

    </form>
        <?php 
         $numero1 = null;
         $numero2 = null;
         if ((isset($_GET["numero1"]) && !empty($_GET["numero1"]))
         && (isset($_GET["numero2"]) && !empty($_GET["numero2"]))){
             $numero1 = (int)htmlspecialchars($_GET["numero1"]);
             $numero2 = (int)htmlspecialchars($_GET["numero2"]);

         }
         $numero1=(int)$numero1;
         $numero2=(int)$numero2;
         while($numero1 < $numero2){
            $producto_final =  $numero1;
            echo $producto_final."<br>";
            $numero1++;
         }
        ?>
    </body>
</html>