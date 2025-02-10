<?php 

if (!isset($resources)) { echo "Error: No se han encontrado recursos."; } 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recursos</title>
</head>
<body>
    <h1>Lista de Recursos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($resources as $resource): ?>
        <tr>
            <td><?php echo $resource['id']; ?></td>
            <td><?php echo $resource['name']; ?></td>
            <td>
                <a href="index.php?controller=RecursosController&function=edit&id=<?php echo $resource['id']; ?>">Modificar</a>
                <a href="index.php?controller=RecursosController&function=delete&id=<?php echo $resource['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="index.php?controller=RecursosController&function=add">Añadir nuevo</a>
</body>
</html>