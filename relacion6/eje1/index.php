<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
try{
	$fich = @fopen("fichero_ejemplo.txt", "r");
	if ($fich === False){
		echo "No se encuentra fichero_ejemplo.txt<br>";
	}else{
		echo "fichero_ejemplo.txt se abrió con éxito<br>";
	}
	$fich = @fopen("fichero_no_existe.txt", "r");
	if ($fich === False){
		echo "No se encuentra fichero_no_existe.txt<br>";
	}else{
		echo " fichero_no_existe.txt se abrió con éxito<br>";
	} 
    fclose($fich);
}catch(Exception $e){
    echo $e->getMessage();
}
    
    ?>
</body>
</html>