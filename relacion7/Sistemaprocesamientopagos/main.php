<?php
require_once 'src/interfaces/PagoInterface.php';
require_once 'src/Pagos/PayPal.php';
require_once 'src/Pagos/TarjetaCredito.php';
require_once 'src/Pagos/TransferenciaBancaria.php';



use App\Pagos\TarjetaCredito;
use App\Pagos\PayPal;
use App\Pagos\TransferenciaBancaria;

// Instanciar los métodos de pago
$tarjeta = new TarjetaCredito();
$paypal = new PayPal();
$transferencia = new TransferenciaBancaria();

// Procesar pagos
echo $tarjeta->procesarPago(150.75) . "<br>";
echo $paypal->procesarPago(200.00) . "<br>";
echo $transferencia->procesarPago(300.50) . "<br>";
?>