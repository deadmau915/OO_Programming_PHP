<?php
/*
class Person
{
    //private $name;
    public function greet()
    {
        return "Hola $this->name";
    }
}

class User
{
    public $type;
}

class Admin extends Person
{
    public $name = 'Admin';
}
*/
require 'User.php';
require 'Admin.php';

$user = new User;
$user->type = new Admin();

echo $user->type->greet();

?>