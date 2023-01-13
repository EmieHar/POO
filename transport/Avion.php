<?php

require_once "Air.php";

class Avion extends Air
{
    public function makeNoise()
    {
        echo "Boum<br>";
    }

    public function autreInconvenient()
    {
        echo "les attérissages forcés dans des tours<hr>";
    }
}
