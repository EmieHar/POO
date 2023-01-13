<?php

require_once "Vehicule_transport.php";

class Air extends vehicule_transport
{
    public function makeNoise()
    {
        echo "Boum, zZzZz<br>";
    }

    public function inconvenient()
    {
        echo "avoir des parachutes en cas de problème<br>";
    }
}
