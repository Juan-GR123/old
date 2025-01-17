<?php
//1. iniciamos sesión

session_start();

require_once 'requires/conexion.php';

$_SESSION['loginExito'] = $_SESSION['loginExito'] ?? false;


$nombre = $apellidos = $password = $email = "";
$nameErr = $apellidosErr = $emailErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Validación del nombre
    if (empty($_POST["nombre"])) {
        $nameErr = "<br><i>El nombre es obligatorio.";
    } else {
        $name = test_input($_POST["nombre"]);
        if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]*$/", $nombre)) { //Dejo minúsculas y mayúsculas, vocales acentuadas ñ y espacio en blanco
            $nameErr = "<br><i>El nombre solo debe contener letras y espacios.";
        }
    }

    if (empty($_POST["apellidos"])) {
        $nameErr = "<br><i>El nombre es obligatorio.";
    } else {
        $name = test_input($_POST["apellidos"]);
        if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]*$/", $apellidos)) { //Dejo minúsculas y mayúsculas, vocales acentuadas ñ y espacio en blanco
            $apellidosErr = "<br><i>El nombre solo debe contener letras y espacios.";
        }
    }

    // 2. Validación del teléfono
    if (empty($_POST["password"])) {
        $phoneErr = "<br><i>El teléfono es obligatorio.";
    } else {
        $phone = test_input($_POST["password"]);
        if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9 ]*$/", $password)) { 
            $passwordErr = "<br><i>La contraseña no es correcta.";
        }
    }

    // 3. Validación del correo electrónico
    if (empty($_POST["email"])) {
        $emailErr = "<br><i>El correo es obligatorio.";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "<br><i>El formato del correo es inválido.";
        }
    }

    // 4. Mostrar datos si no hay errores
   /* if (empty($nameErr) && empty($apellidosErr) && empty($emailErr) && empty($passwordErr)) {
        echo "<h2>Datos válidos ingresados:</h2>";
        echo "<p>Nombre: $name</p>";
        echo "<p>Teléfono: $phone</p>";
        echo "<p>Correo: $email</p>";
    }*/
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" href="./assests/css/estilos.css">
</head>

<body>
    <header>
        <h1>Blog de Videojuegos</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acción</a></li>
                <li><a href="#">Rol</a></li>
                <li><a href="#">Deportes</a></li>
                <li><a href="#">Responsabilidad</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="content">
            <h2>Últimas entradas</h2>
            <article>
                <h3>Título de mi entrada</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat est sit amet sapien sodales, ac lacinia est vehicula. Sed luctus sit amet mi vitae lobortis.</p>
            </article>
            <article>
                <h3>Título de mi entrada</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat est sit amet sapien sodales, ac lacinia est vehicula. Sed luctus sit amet mi vitae lobortis.</p>
            </article>
            <article>
                <h3>Título de mi entrada</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat est sit amet sapien sodales, ac lacinia est vehicula. Sed luctus sit amet mi vitae lobortis.</p>
            </article>
            <article>
                <h3>Título de mi entrada</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat est sit amet sapien sodales, ac lacinia est vehicula. Sed luctus sit amet mi vitae lobortis.</p>
            </article>
            <button>Ver todas las entradas</button>
        </section>
        <aside>
            <div class="search">
                <h3>Buscar</h3>
                <input type="text" placeholder="Buscar...">
                <button>Buscar</button>
            </div>
            <?php if (!$_SESSION['loginExito']) {?>
                <div class="login">
                    <h3>Identificate</h3>
                    <?php
                    if (isset($_SESSION['errorPassLogin'])) {
                        echo $_SESSION['errorPassLogin'];
                    }
                    if (isset($_SESSION['errorEmailLogin'])) {
                        echo $_SESSION['errorEmailLogin'];
                    }
                    if (isset($_SESSION['errorFatal'])) {
                        echo $_SESSION['errorFatal'];
                    }
                    ?>
                    <form action="login.php" method="post">
                        <input type="email" placeholder="Email" name="emailLogin">
                        <input type="password" placeholder="Contraseña" name="passwordLogin">
                        <button type="submit" name="botonLogin">Entrar</button>
                    </form>
                </div>
                <div class="register">
                    <h3>Registrate</h3>
                    <?php
                    if (isset($_SESSION['success_message'])) {
                        echo $_SESSION['success_message'];
                        //unset ($_SESSION['succes_message']);
                    }
                    ?>
                    <form method="post" action="registro.php">
                        <input type="text" placeholder="Nombre" name="nombreRegistro" value="<?php echo $nombre; ?>">
                        <span style="color:red"><?php echo $nameErr; ?></span><br><br>
                        <input type="text" placeholder="Apellidos" name="apellidosRegistro" value="<?php echo $apellidos; ?>">
                        <span style="color:red"><?php echo $apellidosErr; ?></span><br><br>
                        <input type="email" placeholder="Email" name="emailRegistro" value="<?php echo $email; ?>">
                        <span style="color:red"><?php echo $emailErr; ?></span><br><br>
                        <input type="password" placeholder="Contraseña" name="passwordRegistro" value="<?php echo $password; ?>">
                        <span style="color:red"><?php echo $passwordErr; ?></span><br><br> 
                        <button type="submit" name="botonRegistro">Registrar</button>
                    </form>
                </div>
            <?php
            } else {
            ?>
                <div>
                    <form method="post" action="logout.php">
                        <button type="submit" name="botonCerrarSesion">Cerrar Sesion</button>
                    </form>
                </div>
            <?php
            }
            ?>
        </aside>
    </main>
</body>

</html>