<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3><p> Recibir por el metodo get dos numeros</p></h3>
    <h3><p> Y realizar resta, suma, multiplicacion y division</p></h3>

    <form action="" method="get"><!--Si quieres cambiarlo a get cambia el metodo-->
    
    <input type="number" name="numero1">
    <br><br>
    <input type="number" name="numero2"><br><br>

    <input type="submit" name="multiplicar" value="multiplicar">

    <input type="submit" name="sumar" value="sumar">

    <input type="submit" name="restar" value="restar">

    <input type="submit" name="dividir" value="dividir">

    </form>
        <?php 
        $outPut="Nada posteado"; //con get 
        if ( (isset($_GET['numero1']) && !empty($_GET['numero1']) )&& 
        (isset($_GET['numero2']) && !empty($_GET['numero2'])) ) {
            $numero1 = (int)htmlspecialchars($_GET['numero1']);
            $numero2 = (int)htmlspecialchars($_GET['numero2']);
            if ( isset($_GET['multiplicar']) && !empty($_GET['multiplicar']) ) {
                $outPut = $numero1 * $numero2;
            } 
            if ( isset($_GET['sumar']) && !empty($_GET['sumar']) ) {
                $outPut = $numero1 + $numero2;
            }
            if(isset($_GET['restar']) && !empty($_GET['restar'])){
                $outPut = $numero1 - $numero2;
            }
            if(isset($_GET['dividir']) && !empty($_GET['dividir'])){
                $outPut = $numero1 / $numero2;
            }
        }
        echo $outPut;
        ?>
</body>
</html>