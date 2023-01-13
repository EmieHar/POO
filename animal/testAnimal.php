<?php

require "Animal.php";

require "Felin.php";

require "Chat.php";

require "Tigre.php";

$animal = new Animal("chien.jpg","os");
$animal->makeNoise();

$animal2 = new Felin("chat.jpg", "croquette");
$animal2->makeNoise();
$animal2->inconvenient();

$animal3= new Chat("chat.jpg", "croquette");
$animal3->makeNoise();
$animal3->inconvenient();

$tigre = new Tigre ("tigre.jpg","humain");
$tigre->makeNoise();

