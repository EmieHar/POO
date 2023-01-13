<?php

Class Car {
    // je défini les attributs (datas)
    private $marque ;
    private $color ;
    private $energie  ;
    private $etatdemarred;
    private $vitesse ;
  
    public function __construct($m,$c,$e)
    {
        $this->marque =$m ;
        $this->color = $c ;
        $this->energie = $e ;
        $this->etatdemarred = false;
    
    }

    // je défini les méthodes (fonctions d'une classe) getters/setters.
    public function setMarque($m) {
        $this->marque = $m;
        return $this ;
    }

    public function getMarque() {
        return strtoupper($this->marque);
    }

    public function setColor($c) {
        $this->color = $c;
        return $this;
    }

    public function getColor() {
        return $this->color;
    }

    public function setEnergie($e) {
        $this->energie = $e;
        return $this;  
    }

    public function getEnergie() {
        return $this->energie;
    }

    public function demarre() {
        if(!$this->etatdemarred) {
            $this->etatdemarred = true;
        }
    }

    public function accelere($v){
        echo "J'accèlère<br>"   ;
        if ($this->etatdemarred){
            if ($this->vitesse < 110) {
                $this->vitesse += $v;
            }
            return $this->vitesse ;
        } 
        else {
            return "démarre la voiture stp";
        }
    }

    public function decelere($v){
        echo "Je décélère<br>"   ;
            $this->vitesse -= $v ;
            return $this->vitesse ;
    }

    public function freine() {
        echo "Je freine<br>"   ;
        // passer à la vitesse zero 
        $this->vitesse = 0 ;
        return $this->vitesse ;
    }

    public function stop() {
        // eteindre le moteur.
        echo "Je coupe le contact<br>"   ;
        if ( $this->vitesse === 0 ) {
        $this->etatdemarred = false ;
            return "moteur stoppé";
        } else {
            return "tu es en train de rouler";
        }
    }

}

?>