<?php 
namespace Models;

class Barajaes{
    private array $baraja;

    function __construct()
    {
        $baraja=[];
        $palos = Carta::PALOS;
        for($i=0;$i<sizeof($palos); $i++){
            for($j=1;$j<=12;$j++){
                $carta = new Carta($j,$palos[$i]);
                $baraja[] = $carta;
            }
        }
        $this->setBaraja($baraja);
    }



        public function getBaraja()
        {
                return $this->baraja;
        }


        public function setBaraja($baraja)
        {
                $this->baraja = $baraja;

                return $this;
        }
}

?>