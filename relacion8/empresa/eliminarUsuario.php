<?php 
session_start();

require_once 'config/config.php';
require_once 'Lib/conexion.php';


$conexion = new Conexion();
$pdo = $conexion->getPdo();

if(isset($_POST['eliminar'])){

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="eliminarUsuario.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" value=<?php echo $_SESSION['email'] ?>>
        <input type="submit" name="Eliminar" id="Eliminar">
    </form>
</body>
</html>