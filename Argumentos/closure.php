<?php

//closure o funcion anonima 
/*
$greet = function ($name)  //variable que requiere logica de programacion
{
    return "Hola, $name";
}

echo $greet('Juan Bertino');
*/
function greet(Closure $lang, $name)
{
    return $lang($name);
}

$es = function ($name)
{
    return "Hola, $name";
};

$en = function ($name)
{
    return "Hello, $name";
};

echo greet($en, 'Lynda');
