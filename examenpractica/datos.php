<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 2px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    /*function mostrarArray($array){
        foreach($array as $key => $cosas){
            echo $key ."{ <br>";
            foreach($cosas as $key1 => $cosa){
                echo $key1 ."= " . $cosa . " <br>";
            }
            echo "}<br>";
        }
    }*/

    $usuarios = [
        "Pepe" => ["contrasenia" => "Queen123", "nombre" => "Pepe", "Apellido1" => "Justicia", "Apellido2" => "Belasco", "Edad" => 12, "Fecha_alta" => "2019-01-12"],
        "Alonso" => ["contrasenia" => "12BabyT", "nombre" => "Alonso", "Apellido1" => "García", "Apellido2" => "Justicia", "Edad" => 17, "Fecha_alta" => "2023-09-12"],
        "Rex" => ["contrasenia" => "Amigo321", "nombre" => "Rex", "Apellido1" => "Cruz", "Apellido2" => "Rosales", "Edad" => 21, "Fecha_alta" => "2005-11-20"]
    ];

    //mostrarArray($usuarios);

    $libros = [
        "123456789101" => ["unidades" => 5, "titulo" => "Don Quijote", "Editorial" => "Editorial Cervantes", "Año" => 1605, "autores" => ["nombre" => "Miguel", "apellido1" => "de", "apellido2" => "Cervantes"]],
        "123456789102" => ["unidades" => 10, "titulo" => "Alas Rojas", "Editorial" => "Editorial Minotauro", "Año" => 2016, "autores" => ["nombre" => "Pierce Brown", "apellido1" => "Brown", "apellido2" => "Nose"]],
        "123456789103" => ["unidades" => 32, "titulo" => "El libro", "Editorial" => "Editorial barco de vapor", "Año" => 1900, "autores" => ["nombre" => "Max", "apellido1" => "Bright", "apellido2" => "inventado"]]
    ];

    //mostrarArray($libros);

    $prestamos = [
        ["isbn" => "123456789101", "usuario" => "Pepe", "fechaInicio" => "2023-01-01", "fechaFin" => "2023-02-01"],
        ["isbn" => "123456789102", "usuario" => "Alonso", "fechaInicio" => "2020-02-12", "fechaFin" => "2020-09-12"],
        ["isbn" => "123456789103", "usuario" => "Rex", "fechaInicio" => "2005-06-10", "fechaFin" => "2005-12-12"]
    ];
    function login($usu, $pw)
    {
        global $usuarios;
        if (empty($pw)) {
            return "ERROR DEL SISTEMA: La contraseña no puede estar vacia";
        } else {
            return isset($usuarios[$usu]) && $usuarios[$usu]["contrasenia"] === $pw;
        }
    }
  //  echo login("Pepe", "Queen123");

    function escribeUsuario($usu)
    {
        global $usuarios;
        if (empty($usu)) {
            return "ERROR DEL SISTEMA: El usuario no existe";
        } else {
            if (isset($usuarios[$usu])) {
                $user=$usuarios[$usu];
                    echo $user["Apellido1"] ." " . $user["Apellido2"] . ", " . $user["nombre"] ." (" . $user["Edad"] .") <br>" ;
                    echo "Está con nosotros desde el " . $user["Fecha_alta"];//format
            }
        }
    }

   // escribeUsuario("Pepe");



    function retrasado($ini,$fin){
        if($ini>$fin){
            return "SI";
        }else{
            return "NO";
        }
    }

    function escribePrestamos($usu){
        global $prestamos;
        global $libros;
        global $usuarios;
        if (empty($usu)) {
            return "ERROR DEL SISTEMA: El usuario no existe";
        } else {
          /* foreach($prestamos as $key =>$values){
            $valor=$values["isbn"];
                if($values["usuario"]===$usu){
                   echo "ISBN: " . $values["isbn"] ." titulo: ". $libros[$valor]["titulo"] . 
                   " Fechaini: " .  $values["fechaInicio"] . " FechaFin: " . $values["fechaFin"] ." Retrasado: " .retrasado($values["fechaInicio"],$values["fechaFin"]) . "<br>";
                }
           }*/
           echo "<table>";
        
           echo "<thead>";
               echo "<tr>";
                   echo "<th>isbn</th>";
                   echo "<th>titulo</th>";
                   echo "<th>Fecha ini</th>";
                   echo "<th>Fecha Fin</th>";
                   echo "<th>Retrasado</th>";
               echo "</tr>";
           echo "</thead>";
           echo "<tbody>";
           foreach($prestamos as $key =>$values){
            $valor=$values["isbn"];
                if($values["usuario"]===$usu){
                    echo "<tr>";
                   echo "<td>ISBN: " . $values["isbn"] ."</td> <td>titulo: ". $libros[$valor]["titulo"] . 
                   " </td><td>Fechaini: " .  $values["fechaInicio"] . " </td><td>FechaFin: " . $values["fechaFin"] .
                   "</td><td> Retrasado: " .retrasado($values["fechaInicio"],$values["fechaFin"]) . "</td><br>";
                   echo "</tr>";
                }
           }
           echo "</tbody>";
           echo "</table>";
        }
    }

    
    $usuario = $_GET['usuario'] ?? '';
    $contrasena = $_GET['contrasena'] ?? '';

    login($usuario,$contrasena);
    echo "<br>";
    escribeUsuario($usuario);
    echo "<br>";
    escribePrestamos($usuario);
    //escribePrestamos("Pepe");
}
    ?>
</body>

</html>