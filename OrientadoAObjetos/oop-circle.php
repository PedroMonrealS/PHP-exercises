<?php

abstract class Figure {
    protected $radi;
    
    abstract public function getArea();
}

class Circle extends Figure {
    public function __construct($radi) {
        $this->radi = $radi;
    }

    public function getArea() {
        return (pow($this->radi, 2) * pi());
    }
}

try {
    $circle = new Circle(10);
    echo "Circle created successfully<br>";
    echo "The area of the circle is: " . $circle->getArea() . "<br>";
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>
