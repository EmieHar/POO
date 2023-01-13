<?php

require_once "Vehicule_transport.php";

require_once "Terre.php";
require_once "Mer.php";
require_once "Air.php";

require_once "Voiture.php";
require_once "Camion.php";
require_once "train.php";

require_once "Voilier.php";
require_once "Paquebot.php";

require_once "Avion.php";
require_once "Dirigeable.php";

$twingo = new Voiture ("twingo.jpg","essence");
$twingo->affiche();
$twingo->makeNoise();
$twingo->inconvenient();
$twingo-> autreInconvenient();


$belluga = new Avion("belluga.jpg", "kerozen");
$belluga->affiche();
$belluga->makeNoise();
$belluga->inconvenient();
$belluga->autreInconvenient();

$petrolier = new Paquebot("petrolier.jpg", "mazout");
$petrolier->affiche();
$petrolier->makeNoise();
$petrolier->inconvenient();
$petrolier->autreInconvenient();

?>