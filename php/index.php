<?php

spl_autoload_register(function ($class_name) {
    include "class/".$class_name.'.php';
});


// $logan = new Person;
// $dimitri = new Person;
// $theo = new Person("FEVER","Theo","Violet");

// $logan->setFirstName('Logan');
// $logan->setLastName('HENON');
// $dimitri->setFirstName('Dimitri');
// $dimitri->setLastName('TALLEU');


// echo "<br>". $logan->getFirstName()  . " " .  $logan->getLastName();
// echo "<br>". $dimitri->getFirstName()  . " " .  $dimitri->getLastName();
// echo "<br>". $theo->getFirstName()  . " " .  $theo->getLastName();


//     $loganDescribe = $theo->describe();

//     echo "<br>" . $loganDescribe;

// $logan->setColor(Person::PREFERED_COLOR_YELLOW);

// echo "<br>". $logan->getColor();

//Inherit

// $ferrand = new Learner("discord","TEST","Ferrand","Jaune");
// // $ferrand->setDiscord("lien discord");
// // $ferrand->setFirstName("Ferrand");
// // $ferrand->getFirstName();
// echo $ferrand->describe();

$nico = new Trainer("blabla.github.com","HERBEZ","Nicolas",TRAINER::PREFERED_COLOR_RED);

echo $nico->describe();