<?php 
require __DIR__ . '/../vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf= new Dompdf();

$html= "<h1>Voy a generar un documento pdf a partir de un html</h1>";

$dompdf -> loadHtml($html);

$dompdf->render(); //como el execute del sql

$dompdf->stream("documento.pfd", array("Attachment" => false));
//lo muestra en el navegador
?>