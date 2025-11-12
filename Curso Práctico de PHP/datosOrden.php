<?php
$cantidad = $_REQUEST['cantidad'];

$form = "<form action='resultadoOrden.php' method='post'>";
$input = "<input type='text' name='cantidad' id='cantidad'>";
$button =  "<button type='submit'>Enviar</button>";
$cierraForm = "</form>";
for ($i=0; $i < $cantidad ; $i++) { 
    # code...
     $form.="Descripcion " . $i+1 . " : " .
    "<input type='text' name='descripcion" . $i ."'"." id='descripcion".$cantidadProductos."'".
    "<br><br>";

     $form.="Largo " . $i+1 . " : " .
    "<input type='text' name='largo" . $i ."'"." id='largo".$cantidadProductos."'".
    "<br><br>";
    
     $form.="Ancho " . $i+1 . " : " .
    "<input type='text' name='ancho" . $i ."'"." id='ancho".$cantidadProductos."'".
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
    <?php echo $form.$button.$cierraForm; ?>
    
</body>
</html>