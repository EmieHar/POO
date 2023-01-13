<?php

require_once 'Car.php';

class Berline extends Car{

    public function gaz(){
        echo "Vroum! Vroum! VroumVroum! <br>";
    }

    public function brake(){
        echo "Stop! Stop! Stop! Mais freine!!! <br>";
    }
}

$berline = new Berline();
$berline->gaz();
$berline->brake();