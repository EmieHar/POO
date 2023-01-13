<?php

require_once "Vehicule_transport.php";

class Mer extends vehicule_transport
{
    public function makeNoise()
    {
        echo "flutch, gros Pouet-flutch<br>";
    }

    public function inconvenient()
    {
        echo "le mal de mer<br> ";
    }
}
