<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Estudiantes
    {
        public $nombre;
        public $edad;
        public $notas = [];

        public static $contador = 0;

        public function __construct($nombre, $edad)
        {
            $this->nombre = $nombre;
            if ($edad >= 18) {
                $this->edad = $edad;
            } else {
                throw new InvalidArgumentException("La edad no es valida");
            }
            self::$contador++;
        }


        /**
         * Get the value of nombre
         */
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;

            return $this;
        }

        /**
         * Get the value of edad
         */
        public function getEdad()
        {
            return $this->edad;
        }

        /**
         * Set the value of edad
         *
         * @return  self
         */
        public function setEdad($edad)
        {
            $this->edad = $edad;

            return $this;
        }

        public function agregarNota($nota)
        {
            if ($nota >= 0 && $nota <= 10) {
                array_push($this->notas, $nota);
            } else {
                throw new InvalidArgumentException("La nota no es valida");
            }
        }

        public function calcular_promedio()
        {
            $suma = 0;
            if (empty($this->notas)) {
                throw new InvalidArgumentException("No se puede calcular el promedio");
            }
            /* foreach($this->notas as $values){
                    $suma+=$values;
                }*/
            $suma = array_sum($this->notas) / count($this->notas);

            //$suma=$suma/count($this->notas);
            echo "Alumno/a " . $this->getNombre() . " de " . $this->getEdad() . " años tiene una media de " . $suma. "<br>";
            return $suma;
        }

        public static function calcular_promedio_grupo($estudiantes)
        {
            if (empty($estudiantes)) {
                throw new InvalidArgumentException("No se puede calcular el promedio");
            }
            $sumaPromedios = 0;
            foreach ($estudiantes as $estudiante) {
                if (!$estudiante instanceof Estudiantes) {
                    throw new Exception("Todos los elementos deben ser instancias de la clase Estudiante.");
                }
                $sumaPromedios += $estudiante->calcular_promedio();
            }
            return $sumaPromedios / count($estudiantes);
        }
        // Método estático para obtener el total de estudiantes creados
        public static function obtenerTotalEstudiantes()
        {
            return self::$contador;
        }
    }


    try {
        $estudiante1 = new Estudiantes("Pepe", 18);
        echo "<br>";
        $estudiante1->agregarNota(10);
        $estudiante1->calcular_promedio();
        echo "<br>";


        $estudiante2 = new Estudiantes("Ana", 22);
        $estudiante2->agregarNota(7);
        echo "<br>";
        $estudiante2->calcular_promedio();
        echo "<br>";

        $promedioGrupo = Estudiantes::calcular_promedio_grupo([$estudiante1, $estudiante2]);//como self pero con la clase porque es estatico
        echo "Promedio del grupo: " . $promedioGrupo . "<br>";

        echo "Total de estudiantes: " . Estudiantes::obtenerTotalEstudiantes() . "<br>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "<br>";
    }
    ?>
</body>

</html>