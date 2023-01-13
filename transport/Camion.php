<?php

require_once "Terre.php";

class Camion extends Terre
{
    public function makeNoise()
    {
        echo "Pouet-pouet<br>";
    }

    public function autreInconvenient()
    {
        echo "c'est gros et ça consomme<hr>";
    }
}
