<?php

class Course{
    public function __construct(
        protected string $title,
        protected string $subtitle,
        protected string $description,
        protected array $tags
    ){
        //
    }


    public function __get($name)
    {
        if(property_exists($this, $name)){
            return $this->$name;
        }
    }

    public function __toString()
    {
        $html = "<h1>{$this->title}</h1>";
        $html .= "<h2>{$this->subtitle}</h2>";
        $html .= "<h3>{$this->description}</h3>";
         $html .= "<h2>Tags</h2>";
         $html .= "<ul>";
         foreach ($this->tags as $tag){
            $html .= "<li>{$tag}</li>";
         }
         $html .= "</ul>";
         return $html;

    }

        // public function getTitle(): string
        // {
        //     return $this->title;
        // }
        // public function getSubTitle(): string
        // {
        //     return $this->subtitle;
        // }
        // public function getDescription(): string
        // {
        //     return $this->description;
        // }
        // public function getTags(): array
        // {
        //     return $this->tags;
        // }

        public function addTag(string $tag): void
        {
            if (in_array($tag, $this->tags)){
                return ;
            };
            $this->tags[] = $tag;
        }

}



$course = new Course(
   title:  'Curso profesional de PHP y Laravel',
    subtitle: 'Aprende PHP y laravel desde cero',
    description: 'Lorem ipsum dolor sit amet',
    tags: ['PHP', 'Laravel', 'JavaScript', 'HTML', 'CSS', 'MySQL',]
);

$course->addTag('Framworks');
$course->addTag('PHP');





