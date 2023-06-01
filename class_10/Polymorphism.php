<?php

class Shape
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function area()
    {
        return 0; //Default implementation
    }
}

//Child classes
class Circle extends Shape
{
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function area()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle('Circle_1', 7);
$rectangle = new Rectangle('Rectangle_1', 9, 11);

echo $circle->area();
echo $rectangle->area();

?>