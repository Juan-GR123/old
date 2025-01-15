<?php
//1. iniciamos sesión

session_start();

require_once 'requires/conexion.php';

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
            <div class="login">
                <h3>Identificate</h3>
                <?php 
                if(isset($_SESSION['errorPassLogin'])){
                    echo $_SESSION['errorPassLogin'];
                }
                if(isset($_SESSION['errorEmailLogin'])){
                    echo $_SESSION['errorEmailLogin'];
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
                if(isset($_SESSION['success_message'])){
                    echo $_SESSION['success_message'];
                    //unset ($_SESSION['succes_message']);
                }
                ?>
                <form method="post" action="registro.php">
                    <input type="text" placeholder="Nombre" name="nombreRegistro">
                    <input type="text" placeholder="Apellidos" name="apellidosRegistro">
                    <input type="email" placeholder="Email" name="emailRegistro">
                    <input type="password" placeholder="Contraseña" name="passwordRegistro">
                    <button type="submit" name="botonRegistro">Registrar</button>
                </form>
            </div>
        </aside>
    </main>
</body>

</html>

