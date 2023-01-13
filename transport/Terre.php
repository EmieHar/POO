<?php

require_once "Vehicule_transport.php";

class Terre extends vehicule_transport{
    public function makeNoise(){
        echo "Tut-tut, Pouet-Pouet, gros Pouet<br>";
    }

    public function inconvenient(){
        echo "besoin d'une voie de circulation<br>";
    }
}