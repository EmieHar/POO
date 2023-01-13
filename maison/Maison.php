<?php

 class Piece{

    private $nom;
    private $top;
    private $left;

    private $longueur;
    private $largeur;
    private $nb_fenetre;
    private $nb_porte;

    public function __construct($nom,$top, $left, $longueur, $largeur, $nb_fenetre, $nb_porte){
        $this->nom = $nom;
        $this->top = $top;
        $this->left = $left;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->nb_fenetre = $nb_fenetre;
        $this->nb_porte = $nb_porte;
    }

    public function getLeft(){
        return $this->left ;
    }

    public function getTop(){
        return $this->top;
    }

    public function getLongueur(){
        return $this->longueur;
    }

    public function getlargeur(){
        return $this->largeur;
     }

     public function getNom(){
        return $this->nom;
     }

 }

 class Cuisine extends Piece{
    private $gaz;
    private $eau;
    

    public function setGaz($nb){
        $this->gaz = $nb; 
    }

    public function setEau($nb){
        $this->eau = $nb; 
    }
 }

 class Sdb extends Piece{
    private $eau;
    

    public function setEau($nb){
        $this->eau = $nb; 
    }
 }


 class Chambre extends Piece{
    private $lit;
    

    public function setLit($nb){
        $this->lit = $nb; 
    }
 }

 class Maison{
    private $longueur;
    private $largeur;
    private $cuisine;
    private $sdb;
    private $chambres = array();

    public function __construct($longueur, $largeur, $cuisine, $sdb){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->cuisine = $cuisine;
        $this->sdb = $sdb;
    }

    public function addChambre($ch){
        $this->chambres[] = $ch;
    }

    public function getLongueur(){
        return $this->longueur;
    }

    public function getlargeur(){
        return $this->largeur;
     }


    public function plan2d(){?>
            <svg width="<?= $this->getLargeur() ?>" height="<?= $this->getLongueur() ?>">
       <?php 
            foreach($this->chambres as $chambre) {
                ?>
                <rect x="<?= $chambre->getLeft() ?>" y="<?= $chambre->getTop() ?>" width="<?= $chambre->getLargeur() ?>" height="<?= $chambre->getLongueur() ?>" style="fill:blue;stroke:pink;stroke-width:2;fill-opacity:0.5;stroke-opacity:1" />
                <text x="<?php echo $chambre->getLeft()+10 ;?>" y="<?php echo $chambre->getTop()+20 ;?>"><?= $chambre->getNom();  ?></text>
    <?php   }
       ?> 
       <rect x="<?= $this->cuisine->getLeft() ?>" y="<?= $this->cuisine->getTop() ?>" width="<?= $this->cuisine->getLargeur() ?>" height="<?= $this->cuisine->getLongueur() ?>" style="fill:yellow;stroke:pink;stroke-width:2;fill-opacity:0.5;stroke-opacity:1" />
       <text x="<?php echo $this->cuisine->getLeft()+10 ;?>" y="<?php echo $this->cuisine->getTop()+20 ;?>"><?= $this->cuisine->getNom();  ?></text>
       
       <rect x="<?= $this->sdb->getLeft() ?>" y="<?= $this->sdb->getTop() ?>" width="<?= $this->sdb->getLargeur() ?>" height="<?= $this->sdb->getLongueur() ?>" style="fill:green;stroke:pink;stroke-width:2;fill-opacity:0.5;stroke-opacity:1" /> 
       <text x="<?php echo $this->sdb->getLeft()+10 ;?>" y="<?php echo $this->sdb->getTop()+20 ;?>"><?= $this->sdb->getNom();  ?></text>
    
    </svg>
    <?php
    }

}


 $cuisine = new Cuisine("Cuisine",175,0,150,400,2,2);
 $cuisine->setGaz(1);
 $cuisine->setEau(2);

 $sdb = new Sdb("Salle de bain",150,400,175,100,1,1);
 $sdb->setEau(2);
 
 $chambre1 = new Chambre("Chambre1",0,0,150,200,1,1);
 $chambre1->setLit(1);

 $chambre2 = new Chambre("Chambre2",0,200,150,300,1,2);
 $chambre2->setLit(1);

 $house = new Maison(500,500,$cuisine,$sdb);
 $house->addChambre($chambre1);
 $house->addChambre($chambre2);
 $house->plan2d();

 echo "<pre>";
//  print_r($cuisine);
//  print_r($sdb);
//  print_r($chambre1);
//  print_r($chambre2);
print_r($house);
 echo "</pre>";
?>