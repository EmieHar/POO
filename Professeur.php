
<?php

class Professeur {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $specialites = [];

    public function __construct($id,$nom,$prenom,$email){
        $this->id = $id;
        $this->nom=$nom;
        $this->prenom = $prenom;
        $this->email= $email;
    }

    public function afficheProf(){
        echo "Je suis " . $this->nom. " ".$this->prenom. " voici mon email: ".$this->email." ";
    }

    public function setSpecialites(Specialite $specialite){
        $this->specialites[] = $specialite;
    }

    public function afficheSpecialites(){
        echo",je spécialiste en:<br>";
        echo "<ul>";
        foreach($this->specialites as $specialite){
            echo "<li>".$specialite->afficheSpecialites()."</li>";
        }
        echo "</ul>";
    }
}