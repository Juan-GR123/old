<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="" enctype="multipart/form-data">
        "Escoja un fichero"
        <input type="file" name="fichero">
        <input type="submit" value="Subir Fichero">

    </form>
    <?php
    $tam = $_FILES["fichero"]["size"];
    if ($tam > 256 * 1024) {
        echo "El fichero no se puede mostrar";
    } else {
        echo "Nombre del fichero: " . $_FILES["fichero"]["name"];
        echo "<br>Nombre temporal del fichero en sel servidor: " . $_FILES["fichero"]["tmp_name"];
        $res = move_uploaded_file($_FILES["fichero"]["tmp_name"], "subidos/" . $_FILES["fichero"]["name"]);
    }
    if ($res) {
        echo "<br>Fichero guardado";
    } else {
        echo "<br>Error";
    }
    ?>
</body>

</html>