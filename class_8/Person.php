<?php

class Person
{
    protected $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

}

// Create an instance of the Person class
$person = new Person("John", 25);

// Accessing properties using getter methods
echo $person->getName();  // Output: John
echo $person->getAge();   // Output: 25

// Modifying properties using setter methods
$person->setName("Jane");
$person->setAge(30);

echo $person->getName();  // Output: Jane
echo $person->getAge();   // Output: 30


?>