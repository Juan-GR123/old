<html>
    <body>
    <?php 
    echo"<br>";
    echo $variable ?? "No existe";

    $variable1=null;
    echo"<br>";
    echo $variable1 ?? "No existe";

    $variable2="Ana";
    echo"<br>";
    echo $variable2 ?? "No existe";
    ?>
    </body>
</html>

<html>
    <body>
        <?php 
            //spaceship
            //Numeros enteros
            echo 1<=>1;//0
            echo 1<=>2;//-1
            echo 2<=>1;//1
            //Numeros decimales
            echo 1.5<=>1.5;//0
            echo 1.5<=>2.5;//-1
            echo 2.5<=>1.5;//1
            //Cadena de caracteres
             $a=10;
             $b=20;
             echo "<br>";
             echo $a <=> $a;//0
             echo "<br>";
             echo $a <=> $b;//-1
             echo "<br>";
             echo $b <=> $a; //1
        ?>
    </body>
</html>

<html>
    <body>
        <?php 
            //nullsafe
            class Estudios{
                public String|null $universidad;
                public String $titulos;
    
                public function __construct(?String $universidad,String $titulos){//? Especifica que puede ser null
                    $this->universidad = $universidad;
                    $this->titulos = $titulos;
              }
            }
            class Usuario{
                private Estudios $estudios;
                public function __construct(Estudios $estudios){
                    $this->estudios = $estudios;
                }
    
                public function getEstudios(){
                    return $this->estudios;
                }
                public function setEstudios (Estudios $estudios){
                    $this->estudios = $estudios;    
                }
            }
              
           class Session{
            public Usuario $usuario;//Esta es una variable diferente de la que defines en el main, solamente tienen el mismo nombre

            public function __construct(Usuario $usuario){
                $this->usuario = $usuario;
            }
          }
          
                $estudios=new Estudios(null, "Medicina");
                $usuario=new Usuario($estudios);
                $session=new Session($usuario);
                $universidad = $session?->usuario?->getEstudios()?->universidad;
                echo $universidad;
            
        ?>
    </body>
</html>
