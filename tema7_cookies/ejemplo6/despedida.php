<?php
session_start();//Nos aseguramos de tener activa la sesión
session_unset();//Eliminamos todas de las variables de la sesión
session_destroy();//
setcookie('bienvenida', '', time() - 3600, '/');
header("Location: index.php");
exit;
?>