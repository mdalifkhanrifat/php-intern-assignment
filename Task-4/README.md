

# Animal Class OOP

This project demonstrates object-oriented programming concepts in PHP by implementing an animal kingdom with different animal classes.

## Overview

The base `AnimalClass` defines common properties and behaviors like `walk()`, `makeSound()`, etc. Concrete animal classes inherit from `AnimalClass` and override the methods to implement specific behavior for each animal. 

Polymorphism allows the same methods to produce different results depending on the runtime type of the object. This allows the code to interact with different animals in the same way.

## Files

- `AnimalClass.php` - Base class that defines common methods and properties.
- `BirdClass.php` - Extends base class with behaviors specific to birds.
- `CatClass.php` - Defines cat behaviors by extending base class.
- `DogClass.php` - Implements dog-specific behaviors.
- `Main.php` - Initializes animal instances and calls methods to **demonstrate polymorphism**.

## Usage

The `Main.php` file can be run to see example usage and output:

```
php Main.php
```

### Creating Animal Instances 

The main file shows how to instantiate each animal object:

```php
$cat = new CatClass(); 

$dog = new DogClass();

$bird = new BirdClass();
```

### Calling Methods

Once created, animal instances can call inherited methods like `makeSound()`:

```php
$cat->makeSound(); // Meow

$dog->makeSound(); // Woof

$bird->makeSound(); // Chirp
```

Since each class overrides the parent methods, the same calls produce different results depending on the actual object type.

## Code Examples

CatClass.php:

```php
// Override makeSound() for cat behavior
public function makeSound() {
  echo "Meow"; 
}
```

BirdClass.php:

```php 
// Override fly() for bird behavior 
public function fly() {
  echo "Flying!";
}
```

## OOP Concepts

This project demonstrates these OOP principles:

- **Inheritance** - Child classes inherit common properties and methods from the parent `AnimalClass`
- **Encapsulation** - Each animal's implementation details are hidden and inaccessible externally
- **Polymorphism** - Child classes override methods to provide different implementations 

## Extending the Project

To add new animals:

1. Create a new class like `SnakeClass.php`
2. Extend the base `AnimalClass`
3. Override methods like `makeSound()` to add custom behavior
4. Create an instance in `Main.php`

This will allow the snake to behave as a unique animal while still inheriting the base properties.

## Contributing

Pull requests are welcome! Feel free to contribute new animal classes or enhancements to the existing code.