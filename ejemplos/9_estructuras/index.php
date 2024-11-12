<html>
    <body>
        <p>1.Numero secreto</p>
        <p>2.Divisor cero</p>
    <form method="post" action="">
            <label for="numero">Elige una opcion: </label>
            <input type="text" id="numero" name="numero">
            <input type="submit" value="Enviar">
        </form>
        <?php 
            /*Actividad: Ve a tu editor de código y crea un fichero index.php. 
            En el incluiremos dentro del body únicamente un include de alguno de los dos
            ficheros que hemos programado en la actividad anterior. 
            Da igual, el de adivinar un número o del los divisibles por 3. */

           // include(dirname(__FILE__) ."/"."files/"."metodos.php");

           /*Actividad: Con los conocimientos que tenemos hasta ahora, 
           ¿serías capaz de modificar el fichero index.php para que nos muestre un menú donde se 
           llame a alguno de los dos ejercicios en función de si el usuario pulsa 1 o 2?.  */
           
           if (isset($_POST['numero']) && !empty($_POST['numero'])) {//isset determina que la variable este definida
               $numero = (int)htmlspecialchars($_POST['numero']);//empty te dice si la variable esta vacia
           
           switch ($numero) {
           /* case 1:
                include (dirname(__FILE__) ."/"."files/"."metodos.php");
                break;
            case 2:
                include (dirname(__FILE__) ."/"."files/"."metodos2.php");
                break;
            default:
                echo"La opción no existe";
                break;
                */
                case 1:
                    header("Location: ./files/numeros.php");
                    exit;
                case 2:
                   header("Location: ./files/metodos2.php");
                    exit;
                default:
                    echo"La opción no existe";
            };

        }
        ?>
    </body>
</html>