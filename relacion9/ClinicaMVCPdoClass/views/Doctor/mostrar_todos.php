<?php
// views/Doctor/mostrar_todos.php
?>

<h2>Mis Doctores</h2>
<?php
foreach ($todos_mis_doctores as $doctor) {
    foreach ($doctor as $campo => $valor) {
        echo "$campo: $valor <br><br>";
    }
}