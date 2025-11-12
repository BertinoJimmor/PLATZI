<?php

require 'course.php';

//forma antigua de como declarar una clase
// class Course{
//    public $title;
//    public $subtitle;
//    public $description;
//    public $tag;
//    public function __construct($title, $subtitle, $description, $tag)
//    {
//     $this->title = $title;
//     $this->subtitle = $subtitle;
//     $this->description = $description;
//     $this->tag = $tag;

//    }

// };




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Bienvenido al <?= $course->getTitle() ?></h1>

    <h2><?= $course->getSubTitle() ?></h2>

    <p><?= $course->getDescription() ?></p>

    <p>
        <strong>Etiquetas:</strong>
        <ul>
            <?php foreach ($course->getTags() as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        

</body>
</html>

