<?php
include_once 'views/showAllResources.php';

class RecursosController
{
    public function showAllResources()
    {
        // Aquí deberías obtener los recursos desde el modelo
        $resources = [
            ['id' => 1, 'name' => 'Recurso 1'],
            ['id' => 2, 'name' => 'Recurso 2'],
            // Agrega más recursos según sea necesario
        ];
        
        include 'views/showAllResources.php';
    }

    public function edit()
    {
        $id = $_GET['id'];
        echo "Editar recurso con ID: $id";
        // Aquí deberías agregar la lógica para editar el recurso
    }

    public function delete()
    {
        $id = $_GET['id'];
        echo "Eliminar recurso con ID: $id";
        // Aquí deberías agregar la lógica para eliminar el recurso
    }

    public function add()
    {
        echo "Añadir nuevo recurso";
        // Aquí deberías agregar la lógica para añadir un nuevo recurso
    }
}

?>