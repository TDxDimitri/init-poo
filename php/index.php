<?php

require './class/person.php';

$logan = new Person;
$dimitri = new Person;
$theo = new Person("FEVER","Theo","Violet");

$logan->setFirstName('Logan');
$logan->setLastName('HENON');
$dimitri->setFirstName('Dimitri');
$dimitri->setLastName('TALLEU');


echo "<br>". $logan->getFirstName()  . " " .  $logan->getLastName();
echo "<br>". $dimitri->getFirstName()  . " " .  $dimitri->getLastName();
echo "<br>". $theo->getFirstName()  . " " .  $theo->getLastName();


    $loganDescribe = $theo->describe();

    echo "<br>" . $loganDescribe;

$logan->setColor(Person::PREFERED_COLOR_YELLOW);

echo "<br>". $logan->getColor();
