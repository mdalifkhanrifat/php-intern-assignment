<?php
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."./AnimalClass.php";

class DogClass extends AnimalClass {
    public function __construct() {
        echo "I,m Dog\n";

    }
    public function makeSound() {
        echo "ঘেউ ঘেউ!\n";
    }
}