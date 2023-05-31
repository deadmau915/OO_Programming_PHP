<?php

require 'Animal.php';

class Dog extends Animal
{
    public function makeSound()
    {
        echo 'Guau!';
    }
}

$dog = new Dog();
$dog->makeSound();
$dog->sleep();

?>