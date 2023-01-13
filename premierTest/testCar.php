<?php

    require "Car.php";

    $voiture1 = new Car("citroen","rouge","essence");
    
    
    ?>
    <h1><?= $voiture1->getMarque() ?></h1>
    <h2><?= $voiture1->getColor() ?></h2>
    <h3><?= $voiture1->getEnergie() ?></h3>
    <hr>
    

<?php
$voiture1->demarre();
echo "vitesse=".$voiture1->accelere(100).'<br/>';
echo "vitesse=".$voiture1->accelere(10).'<br/>';
echo "vitesse=".$voiture1->accelere(10).'<br/>';
echo "vitesse=".$voiture1->decelere(50).'<br/>';
echo "vitesse=".$voiture1->freine().'<br/>';
echo $voiture1->stop().'<br/>';





?>


