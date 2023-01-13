<?php
require_once "Bateau.php";

class Sousmarin extends Bateau implements Amarable{
    
    public function nbCordes(){
        //pour rendre amarable il faut nbCordes
        return($this->masse)/5;
    }

    public function nombre(){
        //pour rendre amarable il faut nbCordes
        return($this->masse)/5;
    }
}

?>