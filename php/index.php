<?php

require './class/person.php';

$logan = new Person;

$lastName = $logan->getLastName();
$firstName = $logan->getFirstName();

$logan->setFirstName('Logan');
$logan->setLastName('HENON');

$lastName = $logan->getLastName();
$firstName = $logan->getFirstName();

echo "<br>". $lastName . " " . $firstName; 