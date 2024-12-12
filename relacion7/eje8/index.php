<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    trait Validaciones{
          // Constantes
        const LONGITUD_MINIMA_CONTRASENA = 8;
        public $email;
        public $contrasena;

        public function validarEmail($email){
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                throw new Exception("El email no es valido");
            }
           return $this->email=$email;
        }

        public function validarContrasena($contrasena){
            if (strlen($contrasena) < self::LONGITUD_MINIMA_CONTRASENA) {
                throw new Exception("La contraseña debe tener al menos " . self::LONGITUD_MINIMA_CONTRASENA . " caracteres.");
            }
    
            if (!preg_match('/[A-Za-z]/', $contrasena) || !preg_match('/\d/', $contrasena)) {
                throw new Exception("La contraseña debe contener al menos una letra y un número.");
            }
           return $this->contrasena=$contrasena;
        }

    }
    class Usuario{
        use Validaciones;



        public $nombre;
        public $email;
        public $contrasena;

        public function __construct($nombre,$email,$contrasena)
        {
        $this->validarEmail($email);
        $this->validarContrasena($contrasena);

        $this->nombre = $nombre;
        $this->email = $email;
        $this->contrasena = password_hash($contrasena, PASSWORD_BCRYPT); // Almacenar la contraseña encriptada
        }

        public function cambiarContrasena($nuevaContrasena){
            if($this->validarContrasena($nuevaContrasena)){
                $this->contrasena= password_hash($nuevaContrasena, PASSWORD_BCRYPT);
            }
        }

        public function autenticar($email,$contrasena){
            if ($this->email !== $email) {
                throw new Exception("Correo electrónico incorrecto.");
            }
    
            if (!password_verify($contrasena, $this->contrasena)) {
                throw new Exception("Contraseña incorrecta.");
            }
    
            return true; // Autenticación exitosa
        }
    }

    try{
        $usuario = new Usuario("Juan Pérez", "juan.perez@example.com", "MiP4ssw0rd");

        echo "Usuario creado correctamente." . "<br>";
    
        // Intentar cambiar la contraseña
        $usuario->cambiarContrasena("NuevaC0ntras3na");
        echo "Contraseña cambiada exitosamente." . "<br>";
    
        // Autenticación
        if ($usuario->autenticar("juan.perez@example.com", "NuevaC0ntras3na")) {
            echo "Autenticación exitosa." . "<br>";
        }

    }catch(Exception $e){
        echo "Error: " . $e->getMessage() . "<br>";
    }
    ?>
</body>
</html>