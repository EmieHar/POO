<?php

class Adresse2
{
    //attributs
    private $norue;
    private $nomrue;
    private $cp;
    private $ville;
    private $pays;

    //méthode
    public function __construct($n, $r, $cp, $v, $p)
    {
        $this->norue = $n;
        $this->nomrue = $r;
        $this->cp = $cp;
        $this->ville = $v;
        $this->pays = $p;
    }

    public function afficheAdresse()
    { ?>
        <address>
            <?= $this->norue ?> rue <?= $this->nomrue ?> <br>
            <?= $this->cp ?> <?= $this->ville ?> <?= $this->pays ?>
        </address>
<?php }
}
?>