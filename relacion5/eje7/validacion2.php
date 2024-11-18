<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<?php 
$name = $apellidos = $email = $phone = $empleo = $url = "";
$languages = [];
$nameErr = $surnameErr = $emailErr = $phoneErr = $employmentErr = $languagesErr = $urlErr = "";

// Lista de valores válidos
$validEmployment = ["sin empleo", "media jornada", "tiempo completo"];
$validLanguages = ["Python", "PHP", "JavaScript", "Java", "C++"];

// Procesamiento de la solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validación del nombre
    if (empty($_POST["name"])) {
        $nameErr = "El nombre es obligatorio.";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]*$/", $name)) {
            $nameErr = "El nombre solo debe contener letras y espacios.";
        }
    }

    // Validación de los apellidos
    if (empty($_POST["apellidos"])) {
        $surnameErr = "Los apellidos son obligatorios.";
    } else {
        $apellidos = test_input($_POST["apellidos"]);
        if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]*$/", $apellidos)) {
            $surnameErr = "Los apellidos solo deben contener letras y espacios.";
        }
    }

    // Validación del correo electrónico
    if (empty($_POST["email"])) {
        $emailErr = "El correo es obligatorio.";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "El formato del correo es inválido.";
        }
    }

    // Validación del teléfono
    if (empty($_POST["phone"])) {
        $phoneErr = "El teléfono es obligatorio.";
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^[0-9]{9}$/", $phone)) {
            $phoneErr = "El teléfono debe contener exactamente 9 dígitos.";
        }
    }

    // Validación del empleo actual
    if (empty($_POST["empleo"])) {
        $employmentErr = "El empleo actual es obligatorio.";
    } else {
        $empleo = test_input($_POST["empleo"]);
        if (!in_array($empleo, $validEmployment)) {
            $employmentErr = "El valor del empleo es inválido.";
        }
    }

    // Validación de los lenguajes
    if (empty($_POST["languages"])) {
        $languagesErr = "Debe seleccionar al menos un lenguaje.";
    } else {
        $languages = $_POST["languages"];
        foreach ($languages as $lang) {
            if (!in_array($lang, $validLanguages)) {
                $languagesErr = "Uno o más lenguajes seleccionados son inválidos.";
                break;
            }
        }
    }

    // Validación de la URL
    if (empty($_POST["url"])) {
        $urlErr = "La URL es obligatoria.";
    } else {
        $url = test_input($_POST["url"]);
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            $urlErr = "El formato de la URL es inválido.";
        }
    }

    // Mostrar datos si no hay errores
    if (empty($nameErr) && empty($surnameErr) && empty($emailErr) && empty($phoneErr) && empty($employmentErr) && empty($languagesErr) && empty($urlErr)) {
        echo "<h2>Datos válidos ingresados:</h2>";
        echo "<p>Nombre: $name</p>";
        echo "<p>Apellidos: $apellidos</p>";
        echo "<p>Correo: $email</p>";
        echo "<p>Teléfono: $phone</p>";
        echo "<p>Empleo actual: $empleo</p>";
        echo "<p>Lenguajes que domina: " . implode(", ", $languages) . "</p>";
        echo "<p>URL del trabajo: <a href=\"$url\">$url</a></p>";
    }
}

// Función para limpiar y procesar datos
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data); // Elimina las barras invertidas
    $data = htmlspecialchars($data); // Convierte caracteres especiales en entidades HTML
    return $data;
}

?>
<body>
    <form method="post" action="">
        <h2>Datos de Amigos</h2>
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" value="">
        <br><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos" value="">
        <br><br>

        <label for="email">Correo:</label><br>
        <input type="text" id="email" name="email" value="">
        <br><br>

        <label>Empleo Actual:</label><br>
        <input type="radio" id="sin_empleo" name="sin_empleo" value="sin_empleo">
        <label for="sin_empleo">Sin empleo</label>
        <input type="radio" id="media" name="media" value="media">
        <label for="media">media jornada</label>
        <input type="radio" id="tiempo" name="tiempo" value="tiempo">
        <label for="tiempo">tiempo completo</label>
        <br><br>

        <label for="phone">Teléfono:</label><br>
        <input type="text" id="phone" name="phone" value="">
        <br><br>

        <label>¿Qué lenguajes de programación conoces?</label><br>
        <input type="checkbox" id="c++" name="lenguajes[]" value="C++">
        <label for="c++">C++</label>
        <input type="checkbox" id="javascript" name="lenguajes[]" value="JavaScript">
        <label for="javascript">JavaScript</label>
        <input type="checkbox" id="php" name="lenguajes[]" value="PHP">
        <label for="php">PHP</label>
        <input type="checkbox" id="python" name="lenguajes[]" value="Python">
        <label for="python">Python</label><br><br>

        <button>Enviar</button>
    </form>
</body>

</html>