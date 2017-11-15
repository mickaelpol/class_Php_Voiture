<?php

require ("class/Autoloader.php");
Autoloader::register();

$apparenceVoiture1 = new ApparenceVoiture("blanc", true);
$manuelVoiture1 = new ManuelEntretien(10000, 120000, 5);
// ManuelEntretien(vidange, distribution, airconditionnée);
// ApparenceVoiture("couleur", vitreTeinter(boolean));
// Voiture(marque, serie, puissance, année, apparence, manuel);


$voiture1 = new Voiture("BMW", "serie 2", 150, 2017, $apparenceVoiture1, $manuelVoiture1);

$tableauVoiture = [];

array_push($tableauVoiture, $voiture1);


$voiture2 = clone $voiture1;
$voiture2->getApparence()->setCouleur("rouge");

array_push($tableauVoiture, $voiture2);

var_dump($tableauVoiture);
