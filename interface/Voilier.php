<?php

require_once "Bateau.php";

class Voilier extends Bateau implements Amarable{
    
    public function nbCordes(){
        //pour rendre amarable il faut nbCordes
        return($this->masse)/10;
    }

    public function nombre(){
        
        return $this->masse /10;
    }
}

?>