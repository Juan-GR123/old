<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
             function login($usu, $pw){
                global $usuarios;
                if (empty($pw)) {
                    throw new Exception("ERROR DEL SISTEMA: La contraseña no puede estar vacia");
                } else {
                    return isset($usuarios[$usu]) && $usuarios[$usu]["contrasenia"] === $pw;//te devuelve true o false
                }
            }
    ?>
</body>
</html>