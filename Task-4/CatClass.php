<?php
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."./AnimalClass.php";

class CatClass extends AnimalClass {

    public function __construct() {
        echo "I,m Cat\n";

    }
    public function makeSound() {
        echo "মিউ মিউ!\n";
    }
}