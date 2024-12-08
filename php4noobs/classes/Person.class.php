<?php

namespace Classes;

interface NameInterface {
    public function setName($name);
    public function getName();
}

interface AgeInterface {
    public function setAge($age);
    public function getAge();
}

interface PersonInterface extends NameInterface, AgeInterface {
    const IS_MORTAL = true;

    public function setAge($age);
    public function getAge();
    public function setName($name);
    public function getName();
}

class Person implements PersonInterface {
    public string $name;
    public int $age;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function greet() {
        return "hello my name is: " . $this->name;
    }

    public static function sayHi() {
        return "hi!";
    }
}