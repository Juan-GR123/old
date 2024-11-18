<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

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
    <?php

    ?>
</body>

</html>