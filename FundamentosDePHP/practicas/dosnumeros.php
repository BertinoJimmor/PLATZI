<?php

echo 'Ingresa dos numeros' . PHP_EOL;
$numero1 = readline('Numero 1: ');
$numero2 = readline('Numero 2: ');

echo "Ingresa un texto: ";
$texto = trim(fgets(STDIN));


class Calculadora {
    
  public function sumar($a, $b) {
        return $a + $b;
    }
    public function mayor($a, $b) {
        return ($a > $b) ? $a : $b;
    }
}

class AnalizadorTextos{
    public function numeroVocales($texto){
        $vocales = ['a', 'e', 'i', 'o', 'u',
                    'A', 'E', 'I', 'O', 'U'];
        $contador = 0;
        for($i=0; $i<strlen($texto); $i++){
            if(in_array($texto[$i], $vocales)){
                $contador++;
            }
        }
        return $contador;
    }
}

$calculadora = new Calculadora();
$resultado = $calculadora->sumar($numero1, $numero2);
echo 'La suma es: ' . $resultado . PHP_EOL;

$mayor = $calculadora->mayor($numero1, $numero2);
echo 'El numero mayor es: ' . $mayor . PHP_EOL;

$analizador = new AnalizadorTextos();
$vocales = $analizador->numeroVocales($texto);

echo 'El numero de vocales en el texto es: ' . $vocales . PHP_EOL;
?>