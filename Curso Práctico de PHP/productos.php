<?php
$cantidadProductos = $_REQUEST['cantidad'];
//echo $cantidadProductos;
$form = "<form action='descuentos.php' method='post'>";
$button = "<button type='submit'>Enviar</button>";
$formCierre = "</form>";
for($i = 0; $i <$cantidadProductos; $i++) {
    $form.="Producto " . $i+1 . " : " .
    "<input type='text' name='producto" . $i ."'"." id='".$cantidadProductos."'".
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
<body style="background-color: black; color: white"> 
    <h1>Ingrese el valor de los productos:</h1>
     <?php  echo $form.$button.$formCierre ?>
</body>
</html>


