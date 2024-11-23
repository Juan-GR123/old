<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="">
        <label for="vivienda">Vivienda:</label>
        <select name="vivienda" id="vivenda">
            <option value="adosado">adosado</option>
            <option value="casa" selected>casa</option>
            <option value="piso">Piso</option>
            <option value="chalet">Chalet</option>
        </select><br><br>

        <label for="zona">Zona:</label>
        <select name="zona" id="zona">
            <option value="centro">Centro</option>
            <option value="zaidin" selected>Zaidín</option>
            <option value="chana">Chana</option>
            <option value="sacromonte">Sacromonte</option>
            <option value="albaicin">Albaicin</option>
            <option value="realejo">Realejo</option>

        </select><br><br>
        <label for="direccion">Direccion:</label>
        <input type="direccion" id="direccion" name="direccion"><br><br>
        <span style="color:red"><?php echo $Edir; ?></span><br><br>
        <label for="dormitorios">Numero de dormitorios:</label>
        <input type="radio" id="dormitorios" name="dormitorios" value="1">
        <label for="1">1</label>
        <input type="radio" id="dormitorios" name="dormitorios" value="2">
        <label for="2">2</label>
        <input type="radio" id="dormitorios" name="dormitorios" value="3">
        <label for="3">3</label>
        <input type="radio" id="dormitorios" name="dormitorios" value="4">
        <label for="4">4</label>
        <input type="radio" id="dormitorios" name="dormitorios" value="5">
        <label for="5">5</label><br><br>


        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio"><br><br>
        <span style="color:red"><?php echo $Epre; ?></span><br><br>
        <label for="tamanio">Tamaño:</label>
        <input type="number" id="tamanio" name="tamanio"><br><br>

        <label>Extras</label><br>
        <input type="checkbox" id="piscina" name="Extras" value="piscina">
        <label for="piscina">Piscina</label>
        <input type="checkbox" id="jardin" name="Extras" value="jardin">
        <label for="jardin">Jardin</label>
        <input type="checkbox" id="garaje" name="Extras" value="garaje">
        <label for="garaje">Garaje</label><br><br>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" accept="image/*"><br><br>
        <label for="observaciones">Observaciones:</label>
        <textarea id="observaciones" name="observaciones">
        </textarea><br><br>
        <input type="submit" value="Subir Fichero">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capturar los datos enviados desde el formulario
        $vivienda = $_POST['vivienda'] ?? ''; //las ?? se encargan de que no sea null
        $zona = $_POST['zona'] ?? '';
        $direccion = $_POST['direccion'] ?? '';
        $dormitorios = (int) $_POST['dormitorios'] ?? '';
        $precio = $_POST['precio'] ?? '';
        $tamaño= $_POST['tamanio'] ?? '';
        $Extras = $_POST['Extras'] ?? [];
        $Foto = $_POST['foto'] ?? '';
        $observacion = $_POST['observaciones'] ?? '';

        // Mostrar la información
        echo "<p><strong>Vivienda:</strong> $vivienda</p>";
        echo "<p><strong>Zona:</strong>$zona</p>";
        echo "<p><strong>Direccion:</strong>$direccion</p>";
        echo "<p><strong>Dormitorios:</strong>$dormitorios</p>";
        echo "<p><strong>Precio:</strong> $precio</p>";
        echo "<p><strong>Tamaño:</strong>$tamaño</p>";
        echo "<p><strong>Extras:</strong> " . implode(', ', $Extras) . "</p>";
        echo "<p><strong>Foto:</strong> $Foto</p>";
        echo "<p><strong>Observacion</strong> $observacion</p>";
    } else {
        echo "<p>No se ha enviado ningún dato.</p>";
        $Epre="El precio debe de ser un valor númerico";
        $Edir="Se debe indicar la dirección de la vivienda";
    }
    ?>
</body>

</html>