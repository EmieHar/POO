<?php
require_once 'Inscription.php';
function chargerClasse($nomClasse)
{
    require_once $nomClasse. '.php'; // on inclut la classe correspondante
}

spl_autoload_register('chargerClasse');

// $base = new Inscription("127.0.0.1", "formation","root","");


$etudiant = new Etudiant("Haritchabalet", "Emilie", "em.harit@hotmail.com");
$etudiant->AfficherTous("student");


?>