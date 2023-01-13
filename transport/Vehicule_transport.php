<?php
 Class vehicule_transport
 {
    private string $picture;
    private string $carburant;

    public function __construct($pic,$c){
        $this->picture = $pic;
        $this->carburant = $c;
    }

    public function affiche(){?>
        <h1>photo: <?= $this->picture ?></h1>
        <h2>a besoin de: <?= $this->carburant ?></h2>
        <br>
    <?php } 

    public function inconvenient(){
        echo "il faut l'acheter<br>";
    }

 }

?>