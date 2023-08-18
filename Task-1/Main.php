<?php
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."./CircleClass.php";
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."./RectangleClass.php";


// Example usage
$circle = new CircleClass(5);
$circle->shapes();
echo "Area: " . $circle->area() . "\n";

$rectangle = new RectangleClass(4, 6);
$rectangle->shapes();
echo "Area: " . $rectangle->area() . "\n";
