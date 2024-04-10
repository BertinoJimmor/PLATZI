<?php


$courses = [
    'Frotend' => 'Javascript',
    'Framework' => 'Laravel',
    'Backend' => 'PHP'

];


//*foreach ($courses as $course) {
    # code...

   // echo "$key : $value <br>";
   // echo $value->Laravel;
   //echo "$courses <br>";
};
*/


function upper($course, $key)
{
    echo strtoupper($course).": $key <br>";

}


array_walk($courses, 'upper');


/*

array_key_exists('frontend', $courses);
in_array('javascript', $courses);
array_keys($courses);
array_values($courses);



*/

?>
