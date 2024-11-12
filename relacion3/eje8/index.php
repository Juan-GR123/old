<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Profesores del centro</title>

</head>
<body>
    <?php
    /*Supongamos que guardamos en una array los datos de los profesores de este centro educativo.

Cada elemento de este array a su vez será otro array asociativo que nos permitirá 
almacenar su número de registro personal, su nombre, su apellido/s, su teléfono, 
y su fecha de nacimiento.

Se desea:

a) Crear un array con al menos los datos de 3 profesores

b) Crear una función que nos permita mostrar el número de registro personal de cada uno de los profesores

c) Modifica la función anterior y conviértela en una función anónima (usa array_map()).

d) Crea una función anónima que nos permita mostrar los profesores que han nacido a partir de 1990. ( Usa strtotime() y array_filter()

NOTA: Ejemplo de uso de funciones anónimas , arrays , array_map() y array_filter(). */
        function imprimeProfesores($profesores){
            foreach ($profesores as $valor) {
                echo "Clave: " . $valor['id'] . " - Nombre: " . $valor['Nombre'] . " " . $valor['Apellido'] . "<br>";
            }
        }

        
        $profesores = [ ['id'=>1, 'Nombre'=>'Jose','Apellido'=>'Alfrez', 'telefono' => '600111222', 'fecha_nacimiento' => '1985-06-15'],
                        ['id'=>2, 'Nombre'=>'Pedro','Apellido'=>'Gomez', 'telefono' => '600333444', 'fecha_nacimiento' => '1992-09-23'],
                        ['id'=>3, 'Nombre'=>'Ana','Apellido'=>'Alferez', 'telefono' => '600555666', 'fecha_nacimiento' => '1990-12-01']];
        imprimeProfesores($profesores);

        //funcion anónima
        $verProfesores = function($profe) {
            echo "Identificador: " . $profe['id'] . " - Nombre: ". $profe['Nombre'] ."<br>";
        };//esta función junto con el array map hace lo mismo que la funcion anterior

        echo "<br>";
        
        // Usamos array_map() para aplicar la función anónima a cada profesor
        array_map($verProfesores, $profesores);

        // Función anónima para filtrar profesores nacidos después de 1990
        $profesoresNacidosDespuesDe1990 = function($profesor) {
            // Fecha de nacimiento mínima: 1990-01-01
            $fecha_limite = strtotime('1990-01-01');
            $fecha_nacimiento_profesor = strtotime($profesor['fecha_nacimiento']);
            
            // Devolver solo si nació después de 1990
            return $fecha_nacimiento_profesor >= $fecha_limite;
        };//devuelve true o false

        // Usamos array_filter() para obtener los profesores que cumplen la condición
        //array filter te pasa por todas las posiciones del array
        $profesoresFiltrados = array_filter($profesores, $profesoresNacidosDespuesDe1990);

        // Imprimir los profesores filtrados
        /*foreach ($profesoresFiltrados as $profesor) {
            echo "Nombre: " . $profesor['Nombre'] . " " . $profesor['Apellido'] . " - Fecha de nacimiento: " . $profesor['fecha_nacimiento'] . "<br>";
        }*/
        imprimeProfesores($profesoresFiltrados);
        //print_r($profesoresFiltrados);
        //lo imprimo usando array_map();
        array_map($verProfesores,$profesoresFiltrados);
    ?>
</body>
</html>
