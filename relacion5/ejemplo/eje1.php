<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="POST" action="">
        <select multiple size="3" name="idiomas[]">
        <option value="francés">Francés</option>
        <option value="inglés" selected>Inglés</option>
        <option value="alemán">Alemán</option>
        </select>
        <input type="submit" value="enviar">
        </form>
       <?php   
       if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_POST['idiomas'])){
            $idiomas = $_REQUEST['idiomas'];
            foreach ($idiomas as $idioma)
            print ("$idioma<br>\n");
        }
       }
       ?> 
</body>
</html>