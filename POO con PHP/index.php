<?php

 include 'classes/person.php';
 include 'classes/user.php';

 
$user = new User;

$user->type = new Admin;

echo $user->type->greet();


?>