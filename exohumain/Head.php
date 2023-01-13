<?php
class Head{
    private $yeux;
    private $couleur;
    private $bouche;
    private $nez;

    public function __construct($y,$c,$b,$n){
        $this->couleur =$c;
        $this->bouche = $b;
        $this->nez = $n;
        $this->yeux = $y;
    }
}

class Tronc{
    private $bras;
    private $poitrine;
    private $ventre;

    public function __construct($br,$p,$v){
        $this->bras = $br;
        $this->poitrine = $p;
        $this->ventre = $v;
    }
       
 }


class Legs{
    private $cuisses;
    private $genoux;
    private $pieds;

    public function __construct($cs,$g,$ps){
        $this->cuisses = $cs;
        $this->genoux = $g;
        $this->pieds = $ps;
    }

}

class Human {
    private $head;
    private $tronc;
    private $legs;

    public function __construct(Head $head, Tronc $tronc,Legs $legs)
    {
        $this->head = $head;
        $this->tronc = $tronc;
        $this->legs = $legs;
    }
}

$tete = new Head(1,"noir","pulpeuse","aquilin");
$torse = new Tronc(2,"généreuse","à bierre");
$bas = new Legs ("musclées","noueux","palmés");

$bob = new Human ($tete,$torse,$bas);

var_dump($bob);

?>