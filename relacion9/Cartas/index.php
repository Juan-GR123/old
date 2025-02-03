<?php
//Probamos que podemos acceder a las claves definidas en el espacio de nombres Models

require_once 'Models/Carta.php';
require_once 'Models/Barajaes.php';

use Models\Barajaes;
use Models\Carta;

//probamos que podemos trabajar con la clase Carta 
echo "<p><strong>Creando un objeto de la clase Carta</strong></p>";
$numero = 5;
$palo = "OROS";
if (Carta::compruebaNumero($numero) & (Carta::compruebaPalo($palo))) {
    $micarta = new Carta(5, "OROS");
    echo $micarta . "<br>";
} else {
    echo "Revise el número de la carta y el palo";
}

//Probamos que podemos trabajar con la clase Barajaes
echo "<p><strong>Creando un objeto de la clase Barajaes</strong></p>";
$mibaraja = new Barajaes;
echo "<pre>";
var_dump($mibaraja);
echo "</pre>";
?>