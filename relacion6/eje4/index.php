<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	$contenido = file_get_contents("fichero_ejemplo.txt");
	echo "Contenido del fichero: $contenido<br>";
	$res = file_put_contents("fichero_salida.txt", "Fichero creado con file_put_contents");
	if($res){
		echo "Fichero creado con éxito";
	}else{
		echo "Error al crear el fichero";
	}
?>
</body>
</html>