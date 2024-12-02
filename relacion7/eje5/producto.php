<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Productos
    {
        public $nombre;
        public $precio;
        public $stock;
        public const IVA=0.20;
        public const DESCUENTO_MAXIMO=30;

        public function __construct($nombre, $precio, $stock)
        {
            $this->nombre = $nombre;
            if ($precio <= 0) {
                throw new InvalidArgumentException("El precio debe ser mayor a 0.");
            }else{
                $this->precio = $precio;
            }
            if ($stock < 0) {
                throw new InvalidArgumentException("El stock no puede ser negativo.");
            }else{
                $this->stock = $stock;
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
            $this->nombre = $nombre;

            return $this;
        }

        /**
         * Get the value of precio
         */
        public function getPrecio()
        {
            return $this->precio;
        }

        /**
         * Set the value of precio
         *
         * @return  self
         */
        public function setPrecio($precio)
        {
            if ($precio <= 0) {
                throw new InvalidArgumentException("El precio debe ser mayor a 0.");
            }else{
                $this->precio = $precio;
                return $this;
            }
       
        }

        /**
         * Get the value of stock
         */
        public function getStock()
        {
            return $this->stock;
        }

        /**
         * Set the value of stock
         *
         * @return  self
         */
        public function setStock($stock)
        {
            $this->stock = $stock;

            return $this;
        }

        public static function calcularPrecioConIva(float $precio) {
            $precioIVA=$precio* (1+self::IVA);
            return $precioIVA;
        }

        public function aplicarDescuento(int $porcentaje){
            if($porcentaje<self::DESCUENTO_MAXIMO){
                return $this->getPrecio()*($porcentaje/100);
            }else{
                throw new InvalidArgumentException("El descuento no puede exceder el máximo permitido.");
            }
        }
    }
    ?>
</body>

</html>