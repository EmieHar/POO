<?php

class Specialite{
    private $code;
    private $libelle;

    public function __construct($code,$libelle){
        $this->code = $code;
        $this->libelle = $libelle;
    }

    public function afficheSpecialites(){
        return $this->code." ".$this->libelle;
    }

}


?>