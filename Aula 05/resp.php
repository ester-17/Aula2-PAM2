<?php
abstract class Shape {
    abstract public function calculateArea();
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

//added just because i wanted

class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getRadius(): float {
        return $this->radius;
    }




    public function getArea() {
        return round(pi(), 2) * pow($this->radius, 2);
        // return round(pi(), 2);
    }

    public function getCircumference() {
        return 2 * pi() * $this->radius;
    }
}

class CirFilho extends Circle {
    public function __construct() {
        parent::__construct(5); // Set the radius to 5
    }

    function getCircumference(): float {
        return 2 * round(pi(),2) * $this->getRadius();
    }
}



$triangle = new Triangle(5, 7);
echo "Área do Triângulo: " . $triangle->calculateArea() . "</br>";

$rectangle = new Rectangle(4, 6);
echo "Area do Retângulo: " . $rectangle->calculateArea() . "</br>";

$circle = new CirFilho();
echo "Perimetro: " . $circle->getCircumference() . "</br>";
echo "Área do Círculo: ". $circle->getArea();

?>
