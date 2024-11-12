<html>
    <body>

        <?php 
                //preguntas examen
                //¿cuales son los cuatro componentes principales para ejecutar aplicaciones en un servidor web?
                //1.servidor web 
                //2.lenguaje de programacion 
                //3. un gestor de base de dato 
                //4.modulo encargado de ejecutar codigo

                //¿cuales son las capas fundamentales de una pagina web?
                //1.capa de cliente
                //2.capa intermedia
                //3.capa de acceso a datos

                function compara($valor1,$valor2,$funcionComparacion ):int{
                    return $funcionComparacion($valor1,$valor2);
                }
                $comparaEnteros = function($valor1,$valor2){
                    if($valor1 > $valor2){
                        return 1;
                    }
                    if($valor1 < $valor2){
                        return -1;
                    }
                    return 0;
                };

                $numero1=12;
                $numero2=40;
                if (compara($numero1, $numero2, $comparaEnteros) == 1){
                    echo "El numero 1 es mayor que el numero 2";
                }elseif(compara($numero1, $numero2, $comparaEnteros) == -1){
                    echo "El numero 1 es menor que el numero 2";
                }else{
                    echo "los dos numeros son iguales";
                }


                function hola(?string $nombre=null) {
                        if(is_null($nombre)){
                            echo "Hola";
                        }else{
                            return "Hola ".$nombre."!";
                        }
                }

                //Que a un objeto del tipo number le asignemos el valor de 5 lo imprimamos por pantalla
                class Number{
                    private int|float $numero;

                    public function setNumber(int|float $valor): void{//los : significa el dato que va a devolver
                        $this->numero = $valor;
                    }

                    public function getNumber(): int|float{    
                        return $this->numero;
                    }
                }
                echo "<br>";
                $num1= new Number();
                $num1->setNumber(5);
                echo $num1->getNumber();

        ?>
    </body>
</html>

