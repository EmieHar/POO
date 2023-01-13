<?php

require_once "Terre.php";

class Voiture extends Terre
{
    public function makeNoise()
    {
        echo "Tut-tut<br>";
    }

    public function autreInconvenient()
    {
        echo "trop de paparazzis le long des routes<hr>";
    }
}
