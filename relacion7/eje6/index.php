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
          $this-> saldo+=$monto;
        }
        public function retirar($monto){
            if($monto>$this->saldo){
                throw new Exception("Error no tienes tanto dinero");
            }   
            $this->saldo-=$monto;
        }
    }

        class CuentaBancaria{

        }

        class TarjetaCredito{

        }

   
    ?>
</body>
</html>