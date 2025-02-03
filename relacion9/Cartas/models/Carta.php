<?php 
namespace Models;

class Carta{
    const PALOS = ["ESPADAS", "OROS", "COPAS", "BASTOS"];
    const CARTAS = array(1 => "as", 2 => "dos", 3=>"tres", 4=>"cuatro", 5=> "cinco", 6=>"seis", 7=>"siete", 8=>"ocho",
    9=>"nueve", 10=>"diez", 11=>"caballo", 12=>"rey");

    function __construct(private int $numero, private string $palo)
    {
        
    }

    public function getNumero()
    {
        return $this->numero;
    }


    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }


    public function getPalo()
    {
        return $this->palo;
    }
 
    public function setPalo($palo)
    {
        $this->palo = $palo;

        return $this;
    }

      function compruebaPalo($palo){
        if($palo == "OROS" || $palo == "ESPADAS" || $palo == "COPAS" || $palo == "BASTOS"){
            return true;
        }
    }

      function compruebaNumero($numero){
        if(is_numeric($numero)){
            return true;
        }
    }
}

?>