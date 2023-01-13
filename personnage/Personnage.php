<?php 

class Personnage {
    //datas
    private $_nom;
    private $_prenom;
    private $_age;
    protected $quemafille; 


    public function __construct($n, $p , $a) {
        $this->_nom = $n ;
        $this->_prenom = $p ;
        $this->_age = $a ;
    }

    public function parler($blah) {
        echo "je dis: ".$blah. "<br>" ; 
    }

    public function setNom($nom) {
        $this->_nom = $nom ;
    }
 
    public function getNom() {
        return $this->_nom ; 
    }

    public function setPrenom($prenom) {
        $this->_prenom = $prenom ;
    }
 
    public function getPrenom() {
        return $this->_prenom ; 
    }

    public function setAge($age) {
        $this->_age = $age ;
    }
 
    public function getAge() {
        return $this->_age ; 
    }



}

?>
