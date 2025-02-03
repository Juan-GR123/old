<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de cartas</title>
</head>
<body>
    <h2>Casino</h2>
<!--Creando un controlador frontal-->
     <?php 
     require_once 'autoloader.php';
     use Controllers\BarajaController;

    if((!empty($_GET))):
     
        if(isset($_GET['controller'])){
            $nombre_controlador = 'Controllers\\'.$_GET['controller'].'Controller';
        
            if(class_exists($nombre_controlador)){
                $controlador = new $nombre_controlador;
                
            }
        
        
        }



    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }else{
        echo "La página que buscas no existe";
    }
     ?>
     <?php else: ?> 
        <a href="http://localhost/old/Cartas/index.php?action=mostrarBaraja">Mostrar las cartas de la baraja española</a>
    <?php  endif; ?>
</body>
</html>