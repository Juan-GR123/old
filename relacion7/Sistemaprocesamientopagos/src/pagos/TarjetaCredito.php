<?php 
namespace App\Pagos;//hace referencia añ sitio donde se esta

use App\Interfaces\PagoInterface;//te permita utiliza el implements

class TarjetaCredito implements PagoInterface{
    public function procesarPago(float $cantidad): string
    {
        return "Pago de $cantidad procesado con tarjeta de credito";
    }
}
?>