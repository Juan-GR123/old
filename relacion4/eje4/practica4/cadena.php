<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
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
        
    */


  function calculamosExtension(&$fichero)
  {
    if (!empty($fichero)) {
      $fichero = strstr($_POST['cadena'], '.');
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

  function devuelveTipo(&$fichero)
  {
    if (!empty($fichero)) {
      $fichero = ltrim($fichero, '.');
      $fichero = strtoupper($fichero);
    }
  }



  ?>
</body>

</html>