<?php

//inclure la classe Cat
include "Cat.php";
//instancier un objet de la classe Cat
//Sans constructeur
$monPremierChat = new Cat();
$monPremierChat->setName("Julie");
//Avec constructeur
$monDeuxiemeChat = new Cat("Mia", 2, "Gris");

echo "Mon premier chat est " . $monPremierChat->getName() . "et mon deuxième est " . $monDeuxiemeChat->getName();