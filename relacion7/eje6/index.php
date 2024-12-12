<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    trait Operaciones{
        private $saldo;


        public function depositar($monto){
            if($monto<=0){
                throw new Exception("El monto debe ser positivo");
            }
          $this-> saldo+=$monto;
        }

        public function retirar($monto){
            if($monto<=0){
                throw new Exception("El monto debe ser positivo");
            }
            if($monto>$this->saldo){
                throw new Exception("Error no tienes tanto dinero");
            }   
            $this->saldo-=$monto;
        }
    }

        class CuentaBancaria{
            use Operaciones;
            const MONEDA='USD';
            private $titular;

            public function __construct($titular)
            {
                $this->titular=$titular;
            }

            function transferir($monto, CuentaBancaria $otraCuenta){
                if($monto<=0){
                    throw new Exception("El monto debe ser positivo");
                }
                $this->retirar($monto);
                $otraCuenta->depositar($monto);
            }

            function saldo(){ 
                return $this->saldo. " " . self::MONEDA;
            }
        }

        class TarjetaCredito{
            use Operaciones;
            const MONEDA='USD';
            private $limiteCredito;

            public function __construct($limiteCredito)
            {   
                $this->limiteCredito=$limiteCredito;
            }

            function retirar($monto){
                if($monto<=0){
                    throw new Exception("El monto debe ser positivo");
                }
                if($this->saldo - $monto < -$this->limiteCredito){
                    throw new Exception("Error no tienes tanto dinero");
                }   
                $this->saldo-=$monto;
            }

            public function saldo(){
                return $this->saldo . " " . self::MONEDA;
            }
        }


        //Ejemplo de uso
        try{
            $cuenta1=new CuentaBancaria("Juan");
            $cuenta2=new CuentaBancaria("Ana");

            $cuenta1->depositar(500);
            echo "Saldo Cuenta 1 " . $cuenta1->saldo() . "<br>";
            $cuenta2->depositar(300);
            echo "Saldo Cuenta 2 " . $cuenta2->saldo() . "<br>";

            //transferir
            $cuenta1->transferir(145,$cuenta2);
            echo "<pre>";
            echo "Saldo despues de la tranferencia";
            echo "Saldo Cuenta 1 " . $cuenta1->saldo() . "<br>";
            echo "Saldo Cuenta 2 " . $cuenta2->saldo() . "<br>";
            echo "</pre>";

            //crear tarjeta

            $tarjeta=new TarjetaCredito(1000);
            $tarjeta->depositar(100);
             echo "Saldo Tarjeta: " . $tarjeta->saldo() . "<br>";

            // Intentar retirar más del límite
            $tarjeta->retirar(1050); // Excede el límite de crédito
        }catch(Exception $e){
            echo "Error: ". $e->getMessage()."<br>";
        }
    ?>
</body>
</html>