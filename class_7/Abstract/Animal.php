<?php

abstract class Animal
{
    public function sleep()
    {
        echo 'Zzzz...';
    }

    //We just declare an abstract method, this method must be implemented in the
    //clas that inherit from this abstract class
    abstract public function makeSound();
} 

?>