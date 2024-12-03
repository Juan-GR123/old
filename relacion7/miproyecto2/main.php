<?php
require_once 'src/Roles/RolInterface.php';
require_once 'src/Roles/Administrador.php';
require_once 'src/Roles/Moderador.php';
require_once 'src/Roles/Usuario.php';
require_once 'src/Gestion/GestorUsuarios.php';

use App\Roles\Administrador;
use App\Roles\Moderador;
use App\Roles\Usuario;
use App\Gestion\GestorUsuarios;

// Crear el gestor de usuarios
$gestor = new GestorUsuarios();

// Crear instancias de los roles
$admin = new Administrador();
$moderador = new Moderador();
$usuario = new Usuario();

// Agregar usuarios con sus roles
$gestor->agregarUsuario("Juan", $admin);
$gestor->agregarUsuario("Carlos", $moderador);
$gestor->agregarUsuario("Ana", $usuario);

// Mostrar permisos de los usuarios
echo "Permisos de Juan: " . $gestor->mostrarPermisosUsuario("Juan") . "<br>";
echo "Permisos de Carlos: " . $gestor->mostrarPermisosUsuario("Carlos") . "<br>";
echo "Permisos de Ana: " . $gestor->mostrarPermisosUsuario("Ana") . "<br>";

// Ejecutar acciones de los usuarios
echo "Juan intenta crear: " . $gestor->ejecutarAccionUsuario("Juan", "crear") . "<br>";
echo "Carlos intenta eliminar: " . $gestor->ejecutarAccionUsuario("Carlos", "eliminar") . "<br>";
echo "Ana intenta editar: " . $gestor->ejecutarAccionUsuario("Ana", "editar") . "<br>";
?>