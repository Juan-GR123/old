<?php

use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('DBHOST', 'localhost');        // Nombre del servidor de bases de datos 
define('DBUSER', 'root');         // Usuario para ese servidor
define('DBPASS', '');      // Contraseña para ese servidor
define('DBNAME', 'biblioteca');   // Nombre de la base de datos