<?php

//  Use Abstract Class To force impliment this method in Clild Clases.
abstract class Shape {
    abstract public function getArea();
    abstract public function getParemeter();
}

class Circle extends Shape {

    protected $radius;

    public function __construct( $radius ) {
        $this->radius = $radius;
    }

    public function getArea() {
        return "Area Of Circle: " . pi() * $this->radius * $this->radius;
    }

    public function getParemeter() {
        return "Radius is: " . $this->radius;
    }
}

class Rectangle extends Shape {
    protected $base, $height;

    public function __construct( $base, $height ) {
        $this->base = $base;
        $this->height = $height;
    }

    function getBase() {
        return "Base is: ".$this->base;
    }
    function getHeight() {
        return "Height is: ".$this->height;
    }
    function getParemeter() {
        return "Your Paramiter is: ".$this->base . " : " . $this->height;
    }

    function getArea() {
        return "Rectangles Area is: ".$this->base * $this->height;
    }
}

// First Object For Circle
$radius = 6.5;
$circle = new Circle( $radius );

echo $circle->getParemeter();
echo "\n=======\n";
echo $circle->getArea();
echo "\n=======\n";
echo "\n=======\n";



// First Object For Rectangles
$base = 4;
$height = 6;
$rectangles = new Rectangle( $base, $height );

echo $rectangles->getBase();
echo "\n=======\n";
echo $rectangles->getHeight();
echo "\n=======\n";
echo $rectangles->getParemeter();
echo "\n=======\n";
echo $rectangles->getArea();
