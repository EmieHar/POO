<?php
require"Animal.php";

class Felin extends Animal{
    public function makeNoise(){
        echo "ronronne";
    }
    public function inconvenient(){
        echo"perd ses poils";
    }
}


?>