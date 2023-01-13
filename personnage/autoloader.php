<?php

function chargerClasse($nomClasse){
    require_once $nomClasse.'.php';// on inclut la classe correspondante
}

spl_autoload_register('chargerClasse');

$perso = new Personnage("polo","jean",66);
$perso->parler("ESSAI ");

$employe = new Employe("john","Carpenter",45);
$employe->setEmploi("soudeur")->setSalaire(5000);
$employe->parler(" je suis un employé et je m'appelle ".$employe->getNom()." et je suis ".$employe->getEmploi());

?>