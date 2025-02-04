<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de cartas</title>
</head>

<body>

    <!--Creando un controlador frontal-->
    <?php
  require_once 'autoloader.php'; 
  require_once 'config/config.php'; 
  require_once 'Views/layout/header.php'; 
  use Controllers\FrontController; 
  FrontController::main(); 
  require_once 'Views/layout/footer.php'; 

    /* if ((!empty($_GET))):

        if (isset($_GET['controller'])) {
            $nombre_controlador = 'Controllers\\' . $_GET['controller'] . 'Controller';

            if (class_exists($nombre_controlador)) {
                $controlador = new $nombre_controlador();
                if(isset($_GET['action']) && method_exists($controlador,$_GET['action'])){
                    $action = $_GET['action'];
                    $controlador -> $action();
                }else{
                    echo "La página que buscas no existe";
                }
            }else{
                echo "La página que buscas no existe";
            }
        }else{
            echo "La página que buscas no existe";
            exit();
        }*/
    ?>
    <h2>Casino</h2>
    <nav>
        <ul>
            <li>
                <a href="http://localhost/old/Cartas/index.php?action=mostrarBaraja">Mostrar las cartas de la baraja española</a>
            </li>
        </ul>
    </nav>

</body>

</html>