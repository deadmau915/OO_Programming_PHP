<?php

class ParentClass {
    public function greeting() {
        echo "Hello, I'm the parent!";
    }
}

class ChildClass extends ParentClass {
    public function greeting() {
        echo "Hello, I'm the child!";
    }
}

$parent = new ParentClass();
$parent->greeting();  // Output: Hello, I'm the parent!

$child = new ChildClass();
$child->greeting();   // Output: Hello, I'm the child!

?>