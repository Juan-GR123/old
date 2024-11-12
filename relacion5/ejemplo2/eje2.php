<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="POST" action="">
                <select name="color">
                <option value="rojo">rojo</option>
                <option value="verde" selected>verde</option>
                <option value="azul">azul</option>
                </select>
                <input type="submit" value="enviar">
        </form>
        <?php
         if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['color'])){
                $color = $_REQUEST['color'];
            print ($color);
            }
           }
           
        ?>
</body>
</html>