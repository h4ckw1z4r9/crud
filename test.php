<?php
abstract class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function makeSound(): string;
}

class Dog extends Animal {
    public function makeSound(): string {
        return "Woof! I'm a {$this->name}";
    }
}

$dog = new Dog("Buddy");
echo $dog->makeSound(); // Output: Woof! I'm a Buddy