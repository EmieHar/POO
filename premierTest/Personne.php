<?php

require "Adresse.php";

class Personne
{
    private $nom;
    private $prenom;
    private $adresse; //référence à l'objet adresse

    public function __construct($nom, $prenom, $norue, $nomrue, $cp, $ville)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = new Adresse($norue, $nomrue, $cp, $ville);
    }

    public function affiche()
    { ?>
        <h1><?= $this->nom ?> <?= $this->prenom ?></h1>
        <?= $this->adresse->afficheAdresse() ?>

<?php }
}

?>