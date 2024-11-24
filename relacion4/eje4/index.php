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
    /*Se pretende obtener información de un fichero a partir de su nombre. Para ello se van
        a definir las siguientes funciones:
        a) string calcula_extension (string)
        Recibe una cadena de caracteres que representa el nombre de un fichero y
        devuelve una cadena con la extensión del fichero.
        Ejemplo: la llamada
        $extension = calcula_extension (“curriculum.pdf”);
        devuelve en la variable $extension el valor “PDF”.

        b) string tipo_fichero (string)
        Recibe una cadena de caracteres que representa una extensión de fichero y
        devuelve una cadena con el tipo de fichero que corresponde a dicha extensión
        (véase Tabla I).
        
        Ejemplo: $tipo = tipo_fichero (“PDF”);
        devuelve en la variable $tipo el valor “Documento Adobe PDF”.
        
        Se pide: Crear un fichero cadena.php con estas funciones y una página practica4a.php que,
        utilizando el código que se proporciona, obtenga y muestre el tipo de un fichero a partir de
        una variable con su nombre (figura 1).*/
    include(dirname(__FILE__) . "/" . "practica4/" . "cadena.php");

    $tipoArchivos = [
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
    if (!empty($_POST['cadena'])) {
        calculamosExtension($_POST['cadena']);
    };



    $solucion = $_POST['cadena'];
    //b
    if (!empty($_POST['cadena'])) {
        echo devuelveTipo($solucion);
        echo "<br> A la extension $solucion le corresponde el tipo $tipoArchivos[$solucion]";
    }


    ?>
</body>

</html>