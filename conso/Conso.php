<?php

class Consomme {
    public function calcul($distance,$essence){
        if ($essence <= 0){
            throw new Exception("plus d'essence <hr>");
        }
        return $distance / $essence;
    }
}

$dataVoitures = [
    [50,10],
    [50,0],
    [50,-3],
    [30,5],
];

foreach ($dataVoitures as $v){

    try{
        $conso = new Consomme();
        echo "résultat: ".$conso->calcul($v[0],$v[1]);
        echo "<hr>";
    }
    catch (DivisionByZeroError $e){
        echo "erreur dicvision par zéro.";
    }
    catch (Exception $e){
        echo $e->getMessage();
    }
}


?>