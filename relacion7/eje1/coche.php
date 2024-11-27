<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*Realiza las siguientes actividades:

a.      Crea la clase Coche.  Ten en cuenta que de un coche sabemos color,
        marca, modelo, velocidad, caballos y nº de plazas.

b.      Las propiedades tendrán los siguientes valores por defecto:

c.      Implementa un método que permita frenar y otro acelerar ( suma y resta uno a la velocidad)

d.      Guarda la clase en un archivo llamado coche.php

e.      A partir de esta clase crea los objetos que necesites y el script que nos
        permita mostrar lo siguiente:*/

    class Coche
    {//promoción de propiedades
        public function __construct(
            private string $color = "Rojo",
            private string $marca = "Ferrari",
            private int $velocidad = 300,
            private string $modelo = "Aventador",
            private int $caballos = 500,
            private int $n_plazas = 2
        ) {}
        public function acelerar()
        {
            $this->velocidad ++;
        }

        public function frenar()
        {
            $this->velocidad --;
        }

        // Métodos getter




        /**
         * Get the value of color
         */
        public function getColor()
        {
            return $this->color;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */
        public function setColor($color)
        {
            $this->color = $color;

            return $this;
        }

        /**
         * Get the value of marca
         */
        public function getMarca()
        {
            return $this->marca;
        }

        /**
         * Set the value of marca
         *
         * @return  self
         */
        public function setMarca($marca)
        {
            $this->marca = $marca;

            return $this;
        }

        /**
         * Get the value of velocidad
         */
        public function getVelocidad()
        {
            return $this->velocidad;
        }

        /**
         * Set the value of velocidad
         *
         * @return  self
         */
        public function setVelocidad($velocidad)
        {
            $this->velocidad = $velocidad;

            return $this;
        }

        /**
         * Get the value of modelo
         */
        public function getModelo()
        {
            return $this->modelo;
        }

        /**
         * Set the value of modelo
         *
         * @return  self
         */
        public function setModelo($modelo)
        {
            $this->modelo = $modelo;

            return $this;
        }

        /**
         * Get the value of caballos
         */
        public function getCaballos()
        {
            return $this->caballos;
        }

        /**
         * Set the value of caballos
         *
         * @return  self
         */
        public function setCaballos($caballos)
        {
            $this->caballos = $caballos;

            return $this;
        }

        /**
         * Get the value of n_plazas
         */
        public function getN_plazas()
        {
            return $this->n_plazas;
        }

        /**
         * Set the value of n_plazas
         *
         * @return  self
         */
        public function setN_plazas($n_plazas)
        {
            $this->n_plazas = $n_plazas;

            return $this;
        }

        public function __toString()
        {
            return  "<br>Marca: " . $this->marca . "<br>Modelo: " . $this->modelo . "<br>Color: " . $this->color
            . "<br>Caballos: " . $this->caballos . "<br>Velocidad: " . $this->velocidad . "<br>Plazas: " . $this->n_plazas;
        }

    }

    ?>
</body>

</html>