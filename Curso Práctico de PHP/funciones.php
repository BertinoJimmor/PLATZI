<?php

$nombre = "Camila";
$apellido = "Rojas";

// echo $nombre.' '.$apellido;


function concatenar($nombre, $apellido) {
     echo $nombre.' '.$apellido;
}
concatenar($nombre, $apellido);


function sumarNumeros($numeros){
    $suma = 0;
    
    for ($i=0; $i < 4 ; $i++) { 
        # code...
        $suma = $suma + $numeros[$i];
    }
     echo "\nLa suma de los números es :".$suma."\n";
}

$numeros = [1,3,4,5,6];
sumarNumeros($numeros);

// echo "\n ". is_array($numeros);
var_dump(is_array($numeros));

echo max($numeros);
echo pi();

?>