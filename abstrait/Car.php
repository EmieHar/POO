<?php
abstract class Car{// déclarer abstract dès qu'il y a 1 fonction abstraite
    private $model;
    private $color;

    abstract public function gaz();
    abstract public function brake();

    public function hello(){
        echo "Bonjour Bonjour";
    }
}

?>