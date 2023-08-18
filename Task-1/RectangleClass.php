<?php
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."./GeometricShapeClass.php";


class RectangleClass extends GeometricShapeClass {
    private $height;
    private $width;
    
    public function __construct($height,$width) {
        $this->height = $height;
        $this->width = $width;
    }

    public function shapes(){
        echo "I'm Rectangle".PHP_EOL;
    }
    
    public function area() {
        // Rectangle Area Calculate
        $volume = $this->width * $this->height;
        return $volume;
    }
}