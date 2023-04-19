<?php

class Voiture {
    private String $model;
    private String $fuel;
    private int $nb_vitesses;
    private Bool $auto;

    public function __construct($model,$fuel,$nb_vitesses,$auto){
        $this->model = $model;
        $this->fuel = $fuel;
        $this->nb_vitesses = $nb_vitesses;
        $this->auto = $auto;
    }

    public function getModel(){
        return $this->model;
    }
    public function getFuel(){
        return $this->fuel;
    }
    public function getNbVitesses(){
        return $this->nb_vitesses;
    }
    public function getAuto(){
        return $this->auto;
    }
} 