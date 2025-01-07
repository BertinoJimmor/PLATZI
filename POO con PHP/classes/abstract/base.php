<?php 
require_once("admin.php");
require_once("guest.php");
require_once("user.php");
abstract class Base{
    protected $name;

    private function getClassName(){
        return get_called_class();

    }

    public function login(){
        return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
    }

}


$guest = new Guest();
echo $guest→>login();
$user = new User ('Italo');
echo $user-> login();
$admin = new Admin ('Lynda');
echo $admin-> login();