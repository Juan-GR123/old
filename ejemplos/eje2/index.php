<?php
define("TITULO", "Don Quijote de la Mancha");
if ( defined( "TIT")) {
echo " El título del libro es: ". TITULO;
}else{
    echo "El titulo no esta definido";
}
echo "<br>";
echo __LINE__ . " Versión de PHP " . PHP_VERSION . "<br>";
echo "<br>";
echo __LINE__ . " Sistema Operativo: " . PHP_OS . "<br>";
echo "<br>";
echo  " Estoy en la linea: ". __LINE__ . "<br>";
echo " El directorio en el que estoy: " . __DIR__;

$a="123";
echo "<br>";
echo gettype($a);
$a = +$a;
echo "<br>";
echo $a;
echo "<br>";
echo gettype($a);
//el +$a convierte a un string en entero
//el -$a convierte un numero a negativo, pero no cambia un string a numero.


echo"<br>";
$a = 32;
echo "<br>";
echo $a;
echo "<br>";
$b =2;//indica cuantes posiciones te vas a mover
$a >>= $b;
echo $a;

$data= 0b1100110010101010; //Datos empaquetados en binaro
$parte1= ($data>> 8);
$parte2= $data & 0xFF;

?>