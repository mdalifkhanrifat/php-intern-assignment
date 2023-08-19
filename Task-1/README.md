

# Geometric Shape Classes

This is a PHP class library for creating and working with different geometric shapes. It provides base classes and implementations for circles, rectangles, and more.

## Features

- Abstract `GeometricShape` base class 
- `Circle` and `Rectangle` shape implementations
- Shape name and area calculation methods
- Easy extensibility to create new shape types

## Getting Started

### Prerequisites

- PHP 7.0 or higher

### Installation

- Download the source code or clone the repo
- Include the `GeometricShape` base class and shape classes you need in your code

```php
require_once 'GeometricShape.php';
require_once 'Circle.php';
```

### Usage

Create a new shape instance:

```php  
$circle = new Circle(5); 
```

Call methods like `shapes()` and `calculateArea()`:

```php
echo $circle->shapes(); // "Circle"
echo $circle->area(); // 78.5
```

See the `examples` folder for more usage examples. 

## Shape Classes

### GeometricShape (abstract)

Base class for different geometric shapes. Provides common properties and methods.

**Methods:**

- `shapes()` - Get the name of the shape 
- `area()` - Calculate the area (abstract method to be implemented by subclasses)

### Circle

Represents a circle. Extends `GeometricShape`.

**Properties:**

- `radius` - The radius of the circle

**Methods:**

- `area()` - Calculate area using circle formula

### Rectangle 

Represents a rectangle. Extends `GeometricShape`.

**Properties:**

- `width` - The width of the rectangle
- `height` - The height of the rectangle

**Methods:** 

- `area()` - Calculate area using rectangle formula 

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contributing

Pull requests are welcome! Feel free to contribute new shape classes or optimizations.

