<?php

class Audi extends Voiture{
    public function __construct(string $model, string $fuel, int $nb_vitesses, bool $auto){
        parent::__construct($model, $fuel, $nb_vitesses, $auto);
    }
  }


?>