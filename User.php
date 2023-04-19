
<?php
class User{
    private $nom;
    private $prenom;
    private $age;

    const PI= 3.14;
    
    public function setNom($n){
        $this->nom = $n;
    }
    public function setPrenom($p){
        $this->prenom = $p;
    }
    public function setAge($a){
        $this->age = $a;
    }
    public function plusUn(){
        $this->age++;
        return $this;
    }
    public function moins2(){
        $this->age -= self::PI - 2;
        return $this;
    }
}