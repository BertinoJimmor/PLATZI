<?php

//por valor
function greet($nombre)
{
    return "Hola, $nombre ";
}

echo greet('Juan Bertino');

//referencias
$course = 'PHP';
function path(&$course)
{
    $course = 'Laravel';
    echo $course;
}
path($course);
echo $course;

//predeterminado

function greets($name = 'Juan Bertino Jimenez')
{
    return "Hola, $name";
}

echo greets();

echo greets('Bertino Jimenez Morales');


?>