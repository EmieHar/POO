<?php


function chargerClasse($nomClasse){
    require_once $nomClasse.'.php';
}

spl_autoload_register('chargerClasse');

$port = new Port("Brest");

$bateau = new Voilier(60);
$bateau->affiche();

$port->accueilEngin($bateau);

$sm = new Sousmarin(80);
$sm->affiche();

$port->accueilEngin($sm);

?>