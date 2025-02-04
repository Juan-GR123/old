<?php 

$listaAutores = $data["listaAutores"];

// Si hay algún mensaje de feedback, lo mostramos
if (isset($data["info"])) {
    echo "<div style='color:blue'>".$data["info"]."</div>";
  }
  
  if (isset($data["error"])) {
    echo "<div style='color:red'>".$data["error"]."</div>";
  }

  echo "<form action='index.php'>
  <input type='hidden' name='action' value='buscarAutores'>
  <input type='text' name='textoBusqueda'>
  <input type='submit' value='Buscar'>
  </form><br>";


  if (count($listaAutores) == 0) {
    echo "No hay datos";
  } else {
    echo "<table border ='1'>";
    foreach ($listaAutores as $fila) {
      echo "<tr>";
      echo "<td>" . $fila->nombre . "</td>";
      echo "<td>" . $fila->apellido . "</td>";
      echo "<td><a href='index.php?action=formularioModificarPersona&idPersona=" . $fila->idPersona . "'>Modificar</a></td>";
      echo "<td><a href='index.php?action=borrarPersona&idPersona=" . $fila->idPersona . "'>Borrar</a></td>";
      echo "</tr>";
    }
    echo "</table>";
  }
?>