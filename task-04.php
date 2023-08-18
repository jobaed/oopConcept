<?php

class Animal {
    public function makeSound() {
        return "Listen Some animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Gew! Gew!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

class Cow extends Animal {
    public function makeSound() {
        return "Moo!";
    }
}

// Impliments This Class Object
$dog = new Dog();
echo "Dog: " . $dog->makeSound() . "\n";

$cat = new Cat();
echo "Cat: " . $cat->makeSound() . "\n";

$cow = new Cow();
echo "Cow: " . $cow->makeSound() . "\n";
