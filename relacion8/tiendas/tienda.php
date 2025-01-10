<?php
// 1.Creamos la conexion a la BBDD para realizar las consultas 
$username = "root";
$password = "";
$dsn = "mysql:host=localhost;dbname=mistiendas;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //lanza un error en caso de que no se haya podido realizar la conexion en pdo
    echo "Conexion realizada con exito";
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}

// Modificar el nombre de la columna 'producto' por 'codigoProducto'
/*try {
    $sql = "ALTER TABLE stock CHANGE producto codigoProducto
            VARCHAR(12)"; // Aquí cambiamos el nombre de la columna
    $pdo->exec($sql);  // Ejecutamos la sentencia ALTER TABLE
    echo "Columna 'producto' renombrada correctamente a 'codigoProducto'.";
} catch (PDOException $e) {
    die("Error al modificar la tabla: " . $e->getMessage());
}*/

if (isset($_POST['producto'])) {
    $producto = $_POST['producto'];
    $sql = "SELECT  tiendas.nombre AS tienda , tiendas.tlf , stock.unidades
            FROM tiendas
            INNER JOIN stock ON tiendas.cod = stock.tienda 
            WHERE stock.CodProducto= :producto";//:producto === $producto con bindParam

    $stmt = $pdo->prepare($sql); //Preparamos la consulta para que se realice en modo seguro
    $stmt->bindParam(':producto', $producto);
    $stmt->execute();

    //$stmt->execute([':producto' => $producto]); //Ejecutamos la consulta

    $stock = $stmt->fetchAll(PDO::FETCH_ASSOC); //Creamos un array asociativo con la respuesta a la consulta
    //var_dump($stock);
}


//3. voy a rellenar el formulario con los productos de mi base de datos
$sql = "SELECT cod, nombre_corto FROM productos";
$stmt = $pdo->query($sql);
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);



/*Cambia en  la tabla stock el campo producto por codigoProducto.
Devuelve el nombre de la tienda, el stock y el telefono de la tienda 
Aplica un css que estará dentro de la carpeta css/estilos.css que nos muestre todo bonito en el centro de la pantalla
*/
?>


<!--2. Creamos el formulario-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de productos</title>
    <link  rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <h1>Ejercicio: conjunto de resultados en PDO</h1>
    <form method="POST">
        <label for="producto">Producto:</label>
        <select name="producto" id="producto" required>
            <?php foreach ($productos as $producto) {  ?>
                <option value="<?php echo $producto['cod'] ?>"><?php echo $producto['nombre_corto']; ?></option>
            <?php  } ?>
        </select>
        <button type="submit">Mostrar Stock</button>
    </form>

    <!--4. Imprimimos el stock del producto por tienda-->
    <?php if (isset($stock)): ?>
        <h2>Stock del producto </h2>
        <table border="1">
            <tr>
                <th>Tienda</th>
                <th>Telefono</th>
                <th>Stock</th>
            </tr>
            <?php foreach ($stock as $fila): ?> <!--: === {}-->
                <tr>
                    <td><?php echo $fila['tienda'] ?></td>
                    <td><?php echo $fila['tlf'] ?></td>
                    <td><?php echo $fila['unidades'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>

</html>