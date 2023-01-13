<?php

class Adresse {
    //attributs
    private  $norue;
    private $nomrue;
    private $cp;
    private  $ville;

    //méthode
    public function __construct($n,$r,$cp,$v){
        $this->norue = $n;
        $this->nomrue = $r;
        $this->cp = $cp;
        $this->ville = $v;
    }
    
    public function afficheAdresse(){ ?>
        <address>
            <?= $this -> norue ?> rue <?= $this -> nomrue ?> <br>
            <?= $this -> cp ?> <?= $this -> ville ?>
        </address>
    <?php }

    }
?>