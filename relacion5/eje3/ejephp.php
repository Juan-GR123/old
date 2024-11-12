<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario = $_POST['usuario'] ?? '';
        $contrasena = $_POST['contrasena'] ?? '';


        if($usuario==="usuario" && $contrasena==="1234"){
           header("location:http://localhost/old/relacion5/eje1/index.php");
        }else{
            header("location:http://localhost/old/relacion5/eje3/error.php");
        }
    }
    ?>
</body>
</html>