<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">Cerrar Sesion</a>
    <a href="modificarUsuario.php">Modificar Usuario</a>
    <?php if($_SESSION['rol'] == 'admin') { 
    ?>
    <a href="">Zona Admin</a>
    <?php } ?>
    <br>
    Hola <?php echo $_SESSION['Nombre'];?>
</body>
</html>