<?php 
namespace App\Pagos;//App es un apodo que se le da a la carpeta src. Esto se indica en composer

use App\Interfaces\PagoInterface;

class TransferenciaBancaria implements PagoInterface{
    public function procesarPago(float $cantidad): string
    {
        return "Pago $cantidad procesado mediante tranferencia bancaria";
    }
}
?>