<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    try{
        $fich = fopen("fichero.txt", "w");
        if ($fich === False){
            echo "No se encuentra el fichero o no se pudo leer<br>";
        }else{
            fwrite($fich,"primera linea\n");
            fwrite($fich,"primera linea\n");
            fwrite($fich,"primera linea\n");
            fwrite($fich,"primera linea\n");
        }
        fclose($fich);

        //1.abro el fichero en modo lectura
        $fich = fopen("fichero.txt", "r");
        if ($fich === False){
            echo "No se encuentra el fichero o no se pudo leer<br>";
        }else{
            //2.cuando encuentra la ultima linea se detiene
            while(!feof($fich)){
                $linea =  fgets($fich);
                echo "$linea <br>";
            }
        }
        fclose($fich);

        $fich=fopen("fichero.txt","a");
        if ($fich === False){
            echo "No se encuentra el fichero o no se pudo leer<br>";
        }else{
                fwrite($fich,"algo algo algo\n");
        }
        fclose($fich);

   

        //$contenido = file_get_contents("fichero.txt");
        //$res = file_put_contents("fichero_salida.txt", $contenido);
        //copy
        copy("fichero.txt","fichero_salida.txt");

        $fich = fopen("fichero_salida.txt", "r");
        if ($fich === False){
            echo "No se encuentra el fichero o no se pudo leer<br>";
        }else{
            //2.cuando encuentra la ultima linea se detiene
            while(!feof($fich)){
                $linea =  fgets($fich);
                echo "$linea <br>";
            }
        }
        fclose($fich);

        rename("../eje5/fichero.txt", "Nueva.txt");
        unlink("Nueva.txt");
    }catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>
</body>
</html>