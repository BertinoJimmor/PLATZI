<?php


$miArray = $_POST;
$contador = 0;



$detecta = array_search('descripcion', $miArray);
echo $detecta."<br><br><br><br><br>";

foreach ($miArray as $numero) {
  if ($numero == 'descripcion') {
    $contador++;
  }
}

echo "Hay " . $contador . " elementos. <br><br><br><br><br>";
$request = $_POST;
$total = 0;
$totaldeArticulos = $_REQUEST;

foreach ($request as $numero) {
  if ($numero == 'descripcion') {
    $contador++;
  }
}
echo "Hay " . $contador . " elementos. <br><br><br><br><br>";


foreach ($miArray as $numero) {
  if ($numero == 'descripcion') {
    $contador++;
  }
}






echo $totaldeArticulos."<br><br><br><br><br>";

$area = 0;

//echo $are-a;
$articulos = [];

for ($i=0; $i < $totaldeArticulos; $i++) { 
    # code...
    $descripcion = $_POST['descripcion'.$i];
    $largo = $_POST['largo'.$i];
    $ancho = $_POST['ancho'.$i];
    $area = $largo * $ancho;
    //echo $area;
    $articulos[$i] = $descripcion."=>".$area;
    
};

print_r($articulos);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body   style="background-color: black; color: white">
    
</body>
</html>