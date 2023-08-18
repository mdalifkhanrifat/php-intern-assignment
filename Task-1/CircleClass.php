<?php

require_once dirname(__FILE__).DIRECTORY_SEPARATOR."./GeometricShapeClass.php";


class CircleClass extends GeometricShapeClass {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function shapes(){
        echo "I'm Circle".PHP_EOL;
    }
    public function area() {
        // Circle Area Calculate
        $volume = pi() * pow($this->radius,2);
        return $volume;
    }
}