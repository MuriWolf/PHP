<?php

use Classes\Person;

require "../classes/Person.class.php";

$newPerson = new Person();
$newPerson->name = "unknown";
$newPerson->age = 0;

var_dump($newPerson);
var_dump($newPerson->greet());
var_dump($newPerson::sayHi());

foreach ($newPerson as $key => $value) {
    echo $key . ": " . $value . PHP_EOL;
}