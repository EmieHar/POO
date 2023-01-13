<?php

class Car2 {

    private $modele;
    private $color;

    static $data = 'Essai <br>';//variable de classe -> sera la même pour tous les objets créés, sera la même pour chaque instance
    static $count = 0 ;

    public function __construct() {
        self::$count++ ;
    }

    public static function hello() {
        echo "Hello <br><br>";
    }    

    public function affiche() {
        echo self::$data;
}
}

Car2::hello();

echo "Acces sans instancier <br>";
echo Car2::$count;
echo "<br><br>";

echo "Instanciation de la classe avec référence x <br>";
$x = new Car2();
echo $x::$count."<br><br>";

echo "Instanciation de la classe avec référence y <br>";
$y = new Car2();
echo $y::$count."<br><br>";

echo "Instanciation de la classe avec référence z <br>";
$z = new Car2();
echo $z::$count."<br><br>";


echo $x::$data;
$x->affiche();

?>
