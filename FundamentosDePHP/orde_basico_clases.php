<?php


//forma antigua de como declarar ua clase
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


class Course{
   public function __construct(
        public string $title,
        public string $subtitle,
        public string $description,
        public  array $tags
   ){

   }
  

};




$course = new Course(
   title:  'Curso profesional de PHP y Laravel',
    subtitle: 'Aprende PHP y laravel desde cero',
    description: 'Lorem ipsum dolor sit amet',
    tags: ['PHP', 'Laravel', 'JavaScript', 'HTML', 'CSS', 'MySQL',]
);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Bienvenido al <?= $course->title ?></h1>

    <h2><?= $course->subtitle ?></h2>

    <p><?= $course->description ?></p>

    <p>
        <strong>Etiquetas:</strong>
        <ul>
            <?php foreach ($course->tags as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        

</body>
</html>

