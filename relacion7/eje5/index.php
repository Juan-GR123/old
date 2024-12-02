<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include "producto.php";
        try{
            $producto = new Productos("Laptop", 1000, 10);
            echo "Precio original con IVA: " . Productos::calcularPrecioConIva($producto->precio) . "<br>";
        
            $producto->aplicarDescuento(20);
            echo "Precio después del descuento: " . $producto->precio ."<br>";
        }catch(Exception $e){
            $e->getMessage();
        }
    ?>

</body>
</html>