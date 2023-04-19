<?php

function inverse($x){
    if($x === 0){
        throw new Exception('Division par zéro interdite');
    }
    return 1/$x;
}

try{
    echo inverse(5);
    echo inverse(0);
}catch(Exception $e){
    echo ' Error: ' . $e->getMessage()."\n";
};
// ------------------------------------------------------------------

function additionnerMax10($a,$b){
    if (!is_numeric($a) || !is_numeric($b)){
        throw new Exception("les 2 arguments doivent être des numbres");
    }
    if( ($a>10) || ($b>10) ){
        throw new Exception("les nombres doivent être <=10");
    }
    return $a + $b;
}

try{
    echo additionnerMax10(12,3);
}catch(Exception $e){
    echo "problème: ".$e->getMessage();
};