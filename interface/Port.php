<?php

class Port{
    public $nomPort;

    public function __construct($nP){
        $this->nomPort = $nP;
        echo "ici c'est le port de ".$nP."! Bienvenue<br>";
    }

    public function getport(){
        return $this->nomPort;
    }

    public function accueilEngin(Amarable $a){
        if ($a->nombre()>10){
            echo"ça va pas être possible";
            die;
        }else{
        echo "<h3>".__CLASS__.": ok, il me faut ".$a->nbCordes()." cordes pour vous accueillir en toute sécurité</h3>";
        }
    }
}


?>