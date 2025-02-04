<?php
namespace Controllers;

use Models\Barajaes;

class BarajaController {
    public function mostrarBaraja(): void {
        $baraja = new Barajaes();
        require_once '../Views/baraja/muestraBaraja.php';
    }
}
?>