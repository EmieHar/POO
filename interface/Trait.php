<?php

trait message{
    public function msg(){ 
        echo "trop bien la POO <br>";
}
}

trait message2{
    public function msg2(){ 
        echo "J'aime les licornes";
}
}

class Bonjour{
    use message;
}

class Bonjour2{
    use message, message2;
}

$coucou = new Bonjour();
$coucou->msg();

$yo = new Bonjour2();
$yo->msg();
echo "ET <br>";
$yo->msg2();
    


?>