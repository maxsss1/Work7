<?php

namespace Animal;

// Абстрактный класс Animal
abstract class Animal {
    abstract public function makeSound();

    public function getType() {
        return get_class($this); 
    }

    public function getInfo() {
        return $this->getType() . ": " . $this->makeSound();
    }

    abstract public function processInput($input);
}

class Dog extends Animal {
    public function makeSound() {
        return "Гав";
    }

    public function getType() {
        return "Млекопитающее";
    }

    public function processInput($input) {
        if (is_numeric($input)) {
            return (int)$input;
        }
        return (string)$input;
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Мяу";
    }

    public function getType() {
        return "Млекопитающее";
    }

    public function processInput($input) {
        if (is_numeric($input)) {
            return (int)$input;
        }
        return (string)$input;
    }
}
