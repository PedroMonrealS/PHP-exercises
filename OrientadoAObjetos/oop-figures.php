<?php

abstract class figure {
    private $area;
    private $perimeter;
    abstract public function getArea();
    abstract public function getPerimeter();
}

class rectangle extends figure {
    private $base;
    private $height;
    public function getBase() { return $this->base; }
    public function getHeight() { return $this->height; }
    public function getArea() { return $this->base * $this->height; }
    public function getPerimeter() {
        return 2 * ($this->base + $this->height);
    }

    public function __construct($b, $h) {
        $this->base = $b;
        $this->height = $h;
    }
}

try {
    $rectangle = new rectangle(2, 3);
    echo "Rectangle created successfully<br>";
    echo "The area of the rectangle is: " . $rectangle->getArea() . "<br>";
    echo "The perimeter of the rectangle is: " . $rectangle->getPerimeter() . "<br>";
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>
