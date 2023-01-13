<?php

class Personne2
{
    private String $nom;
    private String $prenom;
    private  $adresse; //référence à l'objet adresse
    //injection de dépendance : on injecte l'objet adresse
    private  $voiture;

    public function __construct(String $nom, String $prenom,  $adresse,  $voiture)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->voiture = $voiture;
    }

    public function affiche()
    { ?>
        <h1><?= $this->nom ?> <?= $this->prenom ?></h1>
        <?= $this->adresse->afficheAdresse() ?>
        <?= $this->voiture->getMarque() ?>
        <?= $this->voiture->getColor() ?>
        <?= $this->voiture->getEnergie() ?>


<?php }
}

?>