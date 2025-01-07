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

       $fich = fopen("fichero.txt", "a");
       if ($fich == false) {
           echo "No se encuentra fichero_ejemplo.txt<br>";
       } else {
           echo "fichero_ejemplo.txt se abrió con éxito<br>";
       }
       fclose($fich);

       function listarContacto()
       {
           $fich3 = fopen("fichero.txt", "r"); // Abrir en modo lectura
           if (!$fich3) {
              return "Error al abrir el archivo para listar contactos.";
           }

           $resultado = ""; // Variable para almacenar los contactos
           $i = 0;
           while (($linea = fgets($fich3)) !== false) { // Leer línea por línea
               $i++;
               $resultado .= "$i. $linea<br>"; // Concatenar el resultado
           }

           fclose($fich3);
           echo $resultado;
       }

       echo listarContacto();
               
    }catch(Exception $e){
        echo $e->getMessage();
    }
    ?>
</body>
</html>