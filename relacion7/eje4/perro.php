<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Perro { 
        //promoción de propiedades
    /*    public function __construct(
            private int $tamano,
            private string $raza,
            private string $color,
            private string $nombre
       
        )
        {   
              $this->setNombre($nombre);
            
        }*/
        
        private $tamano;
        private $raza;
        private $color;
        private $nombre;
        public function __construct($tamano,$raza,$color,$nombre)
        {
            $this->setTamano($tamano);
            $this->setRaza($raza);
            $this->setColor($color);
            $this->setNombre($nombre);

        }


        /**
         * Get the value of tamano
         */
        public function getTamano()
        {
            return $this->tamano;
        }

        /**
         * Set the value of tamano
         *
         * @return  self
         */
        public function setTamano($tamano)
        {
            if(strlen($tamano)<21 && is_string($tamano)){
                $this->nombre = $tamano;
                return true;
            }else{
                return false;
            }
        }

        /**
         * Get the value of raza
         */
        public function getRaza()
        {
            return $this->raza;
        }

        /**
         * Set the value of raza
         *
         * @return  self
         */
        public function setRaza($raza)
        {
            if(strlen($raza)<21 && is_string($raza)){
                $this->raza = $raza;
                return true;
            }else{
                return false;
            }
        }

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
            if(strlen($color)<21 && is_string($color)){
                $this->color = $color;
                return true;
            }else{
                return false;
            }
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
            if(strlen($nombre)<21 && is_string($nombre)){
                $this->nombre = $nombre;
                return true;
            }else{
                return false;
            }
          
        }


        public function mostrar_propiedades(){
            echo "El tamaño del perro es ".$this->tamano.", su color ". $this->color.", su raza ".$this->raza ." y su nombre: " . $this->nombre ;
        }

        public function speak(){
            echo "Guau!";
        }
    }


    

    
    ?>
</body>

</html>