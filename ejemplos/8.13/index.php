<html>
    <body>
        <?php 
          class Session{
            public $usuario;
            
            public function __construct($usuario){
                $this->usuario = $usuario;
            }
          }
            
          class Usuario{
            public $nombre;
            private $estudios;

            public function __construct($nombre,$estudios){
                $this->nombre = $nombre;
                $this->estudios = $estudios;
            }

            public function getEstudios(){
                return $this->estudios;
            }
          }


          class Estudios{
            public $universidad;
            public $titulo;
            public function __construct($universidad, $titulo){
                $this->universidad = $universidad;
                $this->titulo = $titulo;
            }
          }
          //
          $misEstudios = new Estudios("Ugr","Ingeniero Informático");
          $EsteUsuario=new Usuario("Carlos",$misEstudios);
          $EstaSession=new Session($usuario);
          $universidad=$EstaSession?->usuario?->getEstudios()?->universidad;
          echo $universidad;
        ?>
    </body>
</html>