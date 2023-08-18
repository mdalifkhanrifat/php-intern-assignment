<?php
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."./BirdClass.php";
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."./CatClass.php";
require_once dirname(__FILE__).DIRECTORY_SEPARATOR."./DogClass.php";

$cat=new CatClass();
$cat->makeSound();
$dog=new DogClass();
$dog->makeSound();

$bird=new BirdClass();
$bird->fly();
$bird->makeSound();


