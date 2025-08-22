<?php
$palabras = array("Sol", "Luna", "Cielo", "Luz", "Estrellas","Lluvia");

for ($i = 0; $i < count($palabras); $i++) {
        if ($_REQUEST["palabra" . ($i)] == $palabras[$i]) {
            echo "¡Correcto! Has ingresado la palabra: " . $palabras[$i] . "<br>";
        } else {
            echo "Incorrecto. La palabra correcta es: " . $palabras[$i] . "<br>";
            echo "Tu respuesta fue: " . $_REQUEST["palabra" . ($i)] . "<br>";
        }
  
}

// if($_REQUEST["palabra1"] == $palabras[0]){
//     echo "¡Correcto! Has ingresado la palabra mágica. <br>" ;
// }else {
//     echo "Incorrecto. La palabra correcta es: " . $palabras[0]."<br>";
//     echo $_REQUEST["palabra1"];
// }

// if($_REQUEST["palabra2"] == $palabras[1]){
//     echo "¡Correcto! Has ingresado la palabra mágica. <br>";
// }else {
//     echo "Incorrecto. La palabra correcta es: " . $palabras[1]."<br>";
// }

// if($_REQUEST["palabra3"] == $palabras[2]){
//     echo "¡Correcto! Has ingresado la palabra mágica. <br>";
// }else {
//     echo "Incorrecto. La palabra correcta es: " . $palabras[2]."<br>";
// }





?>
