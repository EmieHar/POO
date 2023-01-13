<?php


class Bateau {
    protected $masse;

    public function __construct($masse) {
        $this->masse = $masse;
    }

    public function affiche(){
        echo "<h2>Je suis une instance de ".__CLASS__."</h2>";// classe magique de PHP
    }


}

?>