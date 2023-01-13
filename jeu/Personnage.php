<?php

abstract class Personnage{

    private $nom;

    public function getNom(){
        return $this->nom;
    }

    public function setNom($n){
        $this->nom = $n;
        return $this;
    }

    abstract public function combattre();
}

class Nain extends Personnage{
    public function combattre(){
        echo"Je suis un Nain et j'aime pas ceux de la surface <br>";
    }
}

class Guerrier extends Personnage{
    public function combattre(){
        echo"Je suis un guerrier, je tape d'abord et je pose les questions ensuite<br>";
    }
}

class Archer extends Personnage{
    public function combattre(){
        echo"Je suis un archer, ayez confiance, posez cette pomme sur votre tête<br>";
    }
}

class Mage extends Personnage{
    public function combattre(){
        echo"Je suis un mage, mes boules de feu sont les plus hot de toute la région<br>";
    }
}

$perso = [new Nain(), new Guerrier(), new Archer(), new Mage()];
print_r($perso);

    
foreach($perso as $p){
    $p->combattre();
    echo "<hr>";
}

$perso[0]->setNom("Gimli");
print_r($perso);

?>