<?php

$cantidadProductos = count($_POST);

//echo $cantidadProductos;

for ($i=0; $i < $cantidadProductos; $i++) { 
    # code...
    echo "Producto ". ($i+1) . "->" . "Precio con descuento del 35%: $".$_POST['producto'.$i] - ($_POST['producto'.$i] * 0.35)."<br>";
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
</body>
</html>