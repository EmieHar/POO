<?php

require_once 'Specialite.php';

require_once 'Professeur.php';

$spe1 = new Specialite("S01","Java");
$spe2 = new Specialite("S02","Python");
$spe3 = new Specialite("S03","Php");


$prof1 = new Professeur("Jugnot","Gérard","gégé@hotmail.fr");

$prof1->setSpecialites($spe1);
$prof1->setSpecialites($spe2);
$prof1->setSpecialites($spe3);

echo"<pre>";print_r($prof1);echo"</pre>";

$prof1->afficheProfesseur();

?>