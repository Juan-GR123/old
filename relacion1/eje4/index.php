<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form method="post" action="">
            <label for="dinero">¿Que cantidad de euros quieres pasar a dolares?: </label>
            <input type="text" id="dinero" name="dinero">
            <input type="submit" value="Enviar">
        </form>
        <?php 
        $dinero = null;
        if (isset($_POST["dinero"]) && !empty($_POST["dinero"])/*$_POST['dia']==''*/) {//isset determina que la variable este definida
            $dinero = (float)htmlspecialchars($_POST["dinero"]);//empty te dice si la variable esta vacia
        }
        $dinero=(float)$dinero;
        $dinero=$dinero*1.10;
        echo $dinero;

       
        ?>
    </body>
</html>