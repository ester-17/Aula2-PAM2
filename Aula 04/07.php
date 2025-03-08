<?php
class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getRadius(): float {
        return $this->radius;
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

// Example usage
$circle = new CirFilho();
echo "perimetro: " . $circle->getCircumference() . "\n";
?>
