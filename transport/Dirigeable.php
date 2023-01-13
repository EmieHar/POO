<?php

require_once "Air.php";

class Dirigeable extends Air
{
    public function makeNoise()
    {
        echo "??<br>";
    }

    public function autreInconvenient()
    {
        echo "brûle facilement<hr>";
    }
}
