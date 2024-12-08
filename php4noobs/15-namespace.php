<?php

use Classes\Person;
use Classes\Subclasses\Smartphone;

require "./classes/Person.class.php";
require "./classes/subclasses/Smarphone.class.php";

$newPerson = new Person("murillo", 18);

$newSmartphone = new Smartphone("Iphone");

echo $newPerson->name ."". $newPerson->age ."";

echo $newSmartphone->brand;