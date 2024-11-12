<html>
    <body>
        <?php 
          $numero=4;
          $divisor=0;

          echo"<br>";
          try{
             if($divisor==0){
                throw new Exception("División por cero.");
             }
             $resultado= $numero/$divisor;
             echo"El resultado es: " . $resultado;
          }
          catch(Exception $e){
            echo 'Se ha producido el siguiente error: ' . $e->getMessage();
          }

        ?>
    </body>
</html>