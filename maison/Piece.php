<?php

 class Piece{
    private $superficie;
    private $nb_fenetre;
    private $nb_porte;

    public function __construct($superficie, $nb_fenetre, $nb_porte){
        $this->superficie = $superficie;
        $this->nb_fenetre = $nb_fenetre;
        $this->nb_porte = $nb_porte;
    }

    // public function affichePiece(){
    //     echo "superficie:".$this->superficie." m²";
    //     echo $this->nb_fenetre."fenêtres";
    //     echo $this->nb_porte."porte";
    // }
 }

?>