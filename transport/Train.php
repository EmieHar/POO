<?php

require_once "Terre.php";

class Train extends Terre
{
    public function makeNoise()
    {
        echo "Gros pouet<br>";
    }

    public function autreInconvenient()
    {
        echo "en retard<hr>";
    }
}
