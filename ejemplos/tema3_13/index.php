<?php 
//implode te junta los string
//explode te divide los string
//array_map 
$multiplicador=function($a,$b){
    return $a + $b;
};

$numeros=range(1,10);
$numeros2=range(1,10);//10 valores aleatorios
$lista= array_map ($multiplicador,$numeros,$numeros2);//array_map te coge los valores de los array para realizar una funcion
echo implode(" ", $lista);
?>