<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
            <label for="cadena">introduce la cadena: </label>
            <input type="text" id="cadena" name="cadena"><br>
            <input type="submit" value="Enviar">
        </form>
    <?php 
    
       include (dirname(__FILE__) ."/". "practica4/". "cadena.php");
      
       $tipoArchivos=[
        "PDF" => "Documento Adobe PDF",
        "DOC" => "Documento de Microsoft Word",
        "DOCX" => "Documento de Microsoft Word",
        "XLS" => "Hoja de cálculo de Microsoft Excel",
        "XLSX" => "Hoja de cálculo de Microsoft Excel",
        "PPT" => "Presentación de Microsoft PowerPoint",
        "PPTX" => "Presentación de Microsoft PowerPoint",
        "TXT" => "Archivo de texto plano",
        "JPG" => "Imagen JPEG",
        "PNG" => "Imagen PNG",
        "GIF" => "Imagen GIF",
        "MP3" => "Archivo de audio MP3",
        "MP4" => "Archivo de video MP4",
        "ZIP" => "Archivo comprimido ZIP",
        "RAR" => "Archivo comprimido RAR",
      ];
        //a
        if(!empty($_POST['cadena'])){
        calculamosExtension($_POST['cadena']);
        };
       
 
   
        $solucion=$_POST['cadena'];
        //b
        if(!empty($_POST['cadena'])){
            echo devuelveTipo($solucion);
            echo "<br> A la extension $solucion le corresponde el tipo $tipoArchivos[$solucion]";
        }
         

    ?>
</body>
</html>