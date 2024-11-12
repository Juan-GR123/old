<html>
    <body>
    <form method="post" action="">
            <label for="numero">Dime un número entre 1 y 10 </label>
            <input type="text" id="numero" name="numero">
            <input type="submit" value="Enviar">
        </form>
        <?php
            /*Actividad 1:mostrar numeros en pantalla hasta el que tu le indiques  */
            $numero = null;
            if (isset($_POST['numero']) && !empty($_POST['numero'])) {//isset determina que la variable este definida
                $numero = (int)htmlspecialchars($_POST['numero']);//empty te dice si la variable esta vacia
            }
            $numero=(int)$numero;
           $i=1;
           while($numero){
            if($numero==$i){
                break;
            }
            echo $i." ";
            $i++;
           }
           ?>

           <form method="post" action="">
            <label for="tope">Dime un número de tope </label>
            <input type="text" id="tope" name="tope">
           <br>

            <label for="divisor">Dame el divisor</label>
            <input type="text" id="divisor" name="divisor">
            <br>
            <input type="submit" value="Enviar">
        
        </form>
        <form method="post" action="../index.php">
            <input type="submit" value="Volver al menu">
        </form>
          
 
           <?php
            /*Actividad 2:  */
            echo"<br>";
            $tope = null;
            if (isset($_POST['tope']) && !empty($_POST['tope'])) {
                $tope = (int)htmlspecialchars($_POST['tope']);
            }
            $divisor = null;
            if (isset($_POST['divisor']) && !empty($_POST['divisor'])) {
                $divisor = (int)htmlspecialchars($_POST['divisor']);
            }
            $tope=(int)$tope;
            $divisor=(int)$divisor;
            
            for($i= 0; $i<$tope; $i++){
                if($i % $divisor==0){
                    continue;
                 }else{
                    echo"<br>";
                    echo $i;
                 }
            }


        ?>
    </body>
</html>