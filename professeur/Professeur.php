<?php
class Professeur
{
    private $nom;
    private $prenom;
    private $email;
    private $specialites = array();//propriété AS-MANY (le professeur A-PLUSIEURS spécialités) = COMPOSITION

    public function __construct($nom,$prenom,$email){
        $this->nom=$nom;
        $this->prenom = $prenom;
        $this->email= $email;
    }

    public function afficheProfesseur(){
       echo "<p>$this->nom $this->prenom</p>";
       echo "<p><a href=mailto:".$this->email.">".$this->email."</a></p>";
       $this->afficheSpecialites();
    }

    public function setSpecialites(Specialite $specialite){
        $this->specialites[] = $specialite;
            
    }

    public function afficheSpecialites(){
        echo"spécialités:<br>";
        echo "<ul>";
        foreach($this->specialites as $specialite){
            echo "<li>".$specialite->afficheSpecialites()."</li>";
        }
        echo "</ul>";
    }
}



?>