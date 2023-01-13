<?php
require_once "Adresse2.php";

require_once "Personne2.php";

require_once "Car2.php";

$adr1 = new Adresse2 ("5bis", "Armand Rousseau", "29200", "BREST","FRANCE");
$voiture1 = new Car2("citroen", "rouge", "essence");
$p1 = new Personne2 ("Smith","John", $adr1, $voiture1);
$p1->affiche();
