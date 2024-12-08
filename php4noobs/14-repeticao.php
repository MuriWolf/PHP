<?php

use Classes\Person;

require("./classes/Person.class.php");

$newPerson = new Person("murillo", 18);

var_dump($newPerson);
var_dump($newPerson->greet());
var_dump($newPerson::sayHi());

foreach ($newPerson as $key => $value) {
    echo $key . ": " . $value . PHP_EOL;
}