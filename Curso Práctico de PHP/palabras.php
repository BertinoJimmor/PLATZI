<?php  
$palabras = array("Sol", "Luna", "Cielo", "Luz", "Estrellas","Lluvia");

$form = "<form action='revisar.php' method='post'>";
$button = "<button type='submit'>Enviar</button>";
$formCierre = "</form>";
for($i = 0; $i < count($palabras); $i++) {
    //$palabrasDesordenadas[$i] = str_shuffle($palabras[$i]);
    $form.="Palabra " . $i . " : " . str_shuffle($palabras[$i]) . 
    " ".
    "<input type='text' name='palabra" . $i . "'" .
    "<br><br>";
    echo "\n";
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Ordena la siguiente serie de palabras para que forme la palabra correcta:</h1>
    <!-- <form action='revisar.php' method='post'>
        <h1>Ordena la siguiente serie de palabras para que forme la palabra correcta:</h1>
        <h2><?php //echo $palabrasDesordenadas[0]; ?></h2><input type="text" name="palabra1" id="">
        <h2><?php //echo $palabrasDesordenadas[1]; ?></h2><input type="text" name="palabra2" id="">
        <h2><?php //echo $palabrasDesordenadas[2]; ?></h2><input type="text" name="palabra3" id="">
        
        <br><br>
        <button type="submit">Enviar</button>
    </form> -->
    <?php  echo $form.$button.$formCierre ?>
    
</body>
</html>
