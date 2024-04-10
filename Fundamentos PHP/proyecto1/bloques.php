<?php
 if (condicion1) {
     # code...
 } elseif (condicion2) {
     # code...
 } else {
     //ultima condicion si no se cunmple
     # code...
 }

 switch ($variable) { //variable condicional 
     case 'value': //condicion si se llega a cumplir 
         # code...
         break;
     
     default:
         # code... // funciona como si fuese el else, en caso de que ninguno se cumpla
         break;
 }


 foreach ($datos as $ID=> $name) {
     # code... // 
 }
 foreach ($variable as $row) {
     # code... //construccion de tabalas por ejemplo
 }
 
 $a = 1;
 while ($a <= 10) {
     # code... // mientras la variable se siga cumpliendo 
     $a = a++;
     print $a;
 }

 do {
     # code... //ejecucion de almenos una ves
 } while ($a <= 10);

 for ($i=0; $i < ; $i++) { 
     # code... //numeor de repeticiones necesarias

 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Bloques en php</title>
 </head>
 <body>
     <h1>Este es un hola mundo en html $a</h1>
 </body>
 </html>


