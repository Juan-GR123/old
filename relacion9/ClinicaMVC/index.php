<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi clínica</title>
</head>
<body>
    <h1>Bienvenido a mi clínica</h1>

    <?php 
    require_once 'autoloader.php';

    use models\Doctor;
    use models\Paciente;

    $sudoctor=new Doctor('4', 'Juan', 'SASS', '671671234', 'urororo');
    $nombreDoctor= $sudoctor->getNombre();
    echo "El nombre del doctor es: $nombreDoctor";
    ?>
</body>
</html>