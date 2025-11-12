<?php
$course = "Fundamentos de PHP";
$tags = [
    "tittle" => "Curso profesional de laravel",
    "subtittle" => "Aprende laravel y PHP desde cero",
    "description" => "Lorem ipsum",
        "PHP",
        "Laravel",
        "JavaScript",
        "HTML",
        "CSS",
        "MySQL",

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Bienvenido al curso <?= $course?></h1>
    

<ul>
    <?php foreach($tags as $tag){ ?>
    <li><?=$tag ?></li>
    <?php };?>
</ul>
</body>
</html>

