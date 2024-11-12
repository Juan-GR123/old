<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      function calculamosExtension(&$fichero){
        if(!empty($fichero)){
            $fichero=strstr($_POST['cadena'],'.');
            echo "<br> <h3>La extension del fichero es : $fichero</h3>";
        }
      }

      /*function tipo_fichero ($fichero){
      switch($fichero){
          case "PDF":
            return "Documento Adobe PDF";
            break;
          case "TXT":
            return "Documento de texto";
            break;
          case "HTML":
            return "Documento HTML";
           break;
          case "PPT":
            return "Presentación Microsoft Powerpoint";
           break;
          case "DOC":
            return "Documento Microsoft Word";
           break;
          case "GIF":
            return "Imagen GIF";
          break;
          case "JPG":
            return "Imagen JPG";
          break;
          case "ZIP":
            return "Archivo comprimido ZIP";
          break;
          default:
          return "Archivo " . $fichero;
          break;
        }
      }*/

      function devuelveTipo(&$fichero){
        if(!empty($fichero)){
          $fichero= ltrim($fichero,'.');
          $fichero=strtoupper($fichero);
        }
      }



    ?>
</body>
</html>