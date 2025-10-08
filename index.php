<?php
//inclure la classe Animal
include "Animal.php";
//inclure la classe Cat
include "Cat.php";
//inclure la classe Dog
include "Dog.php";
//instancier un objet de la classe Cat
//Sans constructeur
$monPremierChat = new Cat();
$monPremierChat->setName("Julie");
//Avec constructeur
$monDeuxiemeChat = new Cat("Mia", 2, "Gris");

echo "Mon premier chat est " . $monPremierChat->getName() . " et mon deuxième est " . $monDeuxiemeChat->getName();

$monPremierChien = new Dog();
$monPremierChien->setName("Moscou");
echo "\nMon premier chien est " . $monPremierChien->getName();