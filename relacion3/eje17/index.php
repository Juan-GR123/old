<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Se te proporciona un array multidimensional que contiene información
     sobre diferentes productos en una tienda. Cada producto tiene el nombre, precio, 
     y cantidad en stock. Tu tarea es realizar las siguientes operaciones:

        Ordena el array de productos primero por nombre en orden ascendente y 
        luego por cantidad en stock en orden ascendente. Para esto, utiliza las funciones usort() 
        y una función de comparación personalizada.
        Después de la ordenación, verifica si un producto específico, por ejemplo "Televisor", 
        existe en la lista usando in_array() o array_search().
        Finalmente, calcula el valor total de todos los productos en stock (precio * cantidad)
        y muestra el tota */
    $productos = [
        ["nombre" => "Televisor", "precio" => 400, "stock" => 10],
        ["nombre" => "Portátil", "precio" => 800, "stock" => 5],
        ["nombre" => "Smartphone", "precio" => 300, "stock" => 20],
    ];
    function operacion($a,$b){
       /* if($a["nombre"] == $b["nombre"]){//si tienen el mismo nombre
            return $b["stock"] - $a["stock"];//se restan para que quede un número positivo o negativo y que se ordenen
        }
        return $a["nombre"] < $b["nombre"] ? -1 : 1;*/
        switch(strcasecmp($a["nombre"],$b["nombre"])){
            case 0:
                return $a["stock"] - $b["stock"];
                break;
            default:
                return strcasecmp($a["nombre"],$b["nombre"]);
                break;
        }
    }
    echo "Sin ordenar<br>";
    foreach($productos as $key => $value){
        echo $value["nombre"] . "   " . $value["stock"] . "<br>";
      }

    usort($productos,"operacion");//el string se convierte en metodo con usort

    echo "<br> Ordenado: <br>";
      foreach($productos as $key => $value){
        echo $value["nombre"] . "   " . $value["stock"] . "<br>";
      }
//in_array devuelve un booleano
//array_search devuelve la posicion del objeto que se busca
    if(in_array("Televisor", $productos)){
        echo"El elemento Televisor está dentro del array<br>";
    }else{
        echo "El elemento Televisor no está dentro del array<br>";
    }
    $total=0;
    foreach ($productos as $producto) {
        $total+=$producto["precio"]*$producto["stock"];
    }
    echo "<br>El total es ". $total;

    ?>
</body>
</html>