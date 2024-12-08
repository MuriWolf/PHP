<?php

use Classes\Person;
require "../classes/Person.class.php";

// ver as interfaces dentro de Person.class.php

$person = new Person();
$person->name = "Garfield";
$person->age = 23;

echo $person->name . " " . $person->age . " anos " . "is mortal? " . ($person::IS_MORTAL ? "yes" : "no"); 