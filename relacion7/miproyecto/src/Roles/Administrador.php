<?php
namespace App\Roles;

use App\Roles\RolInterface;

class Administrador implements RolInterface {
    public function mostrarPermisos(): string {
        return "Permisos: Crear, Editar, Eliminar, Ver";
    }
}

?>