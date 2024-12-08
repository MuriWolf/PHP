<?php

use Classes\Person;
use Classes\Subclasses\Smartphone;

require "../classes/Person.class.php";
require "../classes/subclasses/Smarphone.class.php";

$newPerson = new Person();
$newPerson->name = "Murillo";
$newPerson->age = 12;

$newSmartphone = new Smartphone("Iphone");

echo $newPerson->name ."". $newPerson->age ."";

echo $newSmartphone->brand;