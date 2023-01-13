<?php

Class Car2 {
    // je défini les attributs (datas)
    private $marque ;
    private $color ;
    private $energie  ;

  
    public function __construct($m,$c,$e)
    {
        $this->marque =$m ;
        $this->color = $c ;
        $this->energie = $e ;
    
    }
    // je défini les méthodes (fonctions d'une classe) getters/setters.
    public function setMarque($m)
    {
        $this->marque = $m;
        return $this;
    }

    public function getMarque()
    {
        return strtoupper($this->marque);
    }

    public function setColor($c)
    {
        $this->color = $c;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setEnergie($e)
    {
        $this->energie = $e;
        return $this;
    }

    public function getEnergie()
    {
        return $this->energie;
    }
}  
?>