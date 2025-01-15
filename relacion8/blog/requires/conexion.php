<?php 
//
$username = "root";
$password = "";
$dsn = "mysql:host=localhost;dbname=blog;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //lanza un error en caso de que no se haya podido realizar la conexion en pdo
    //echo "Conexion realizada con exito<br>";
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}

?>