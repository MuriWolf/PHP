<?php

namespace Classes;

class Person {
    public string $name;
    public int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function greet() {
        return "hello my name is: " . $this->name;
    }

    public static function sayHi() {
        return "hi!";
    }
}