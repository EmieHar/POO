<?php
require 'Personnage.php';

function chargerClasse($nomClasse){
    require_once $nomClasse. 'php';// on inclut la classe correspondante
}

$perso = new Personnage("polo","jean",66);
$preso->parler("ESSAI ");

?>