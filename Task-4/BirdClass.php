<?php
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."./AnimalClass.php";

class BirdClass extends AnimalClass {

    public function __construct() {
        echo "I,m Bird\n";

    }

    public function fly() {
        echo "flying......!\n";
    }
    public function makeSound() {
        echo "কিচির মিচির !\n";
    }

}