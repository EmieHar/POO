<?php

 
class Personne{

    private $nom;
    private $prenom;
    private $age;

    public function getNom(): string
    {
        return $this->nom;
    }
    
    public function setNom (string $nom)
    {
        $this->nom = $nom;
        return $this;
    }
    
    public function getPrenom() : string
    {
        return $this->prenom;
    }
    
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }
    
    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        if($age>0 && $age<150){
          $this->age = $age;
        return $this;  
        } else {
            echo "Error";
        };
        
    }

    public function affiche(){
        echo "<p>Je suis $this->nom, $this->prenom et j'ai $this->age ans</p>";
    
    }
}

$personne1 = new Personne();
$personne1->setNom("Jugnot");
$personne1->setPrenom("Gérard");


$personne1->setAge(63);
$personne1->affiche();

// ------------------------------------------- exo composition-------------------------------------------------------

class Tete{
    private $yeux;
    private $couleur;
    private $bouche;
    private $nez;

    public function __construct($y,$c,$b,$n){
        $this->couleur =$c;
        $this->bouche = $b;
        $this->nez = $n;
        $this->yeux = $y;
    }
}

class Tronc{
    private $bras;
    private $poitrine;
    private $ventre;

    public function __construct($br,$p,$v){
        $this->bras = $br;
        $this->poitrine = $p;
        $this->ventre = $v;
    }
       
 }


class Jambes{
    private $cuisses;
    private $genoux;
    private $pieds;

    public function __construct($cs,$g,$ps){
        $this->cuisses = $cs;
        $this->genoux = $g;
        $this->pieds = $ps;
    }

}

class Human {
    private $head;
    private $tronc;
    private $legs;

    public function __construct(Tete $head, Tronc $tronc, Jambes $legs)
    {
        $this->head = $head;
        $this->tronc = $tronc;
        $this->legs = $legs;
    }
}
$tete = new Tete(1,"noir","pulpeuse","aquilin");
$torse = new Tronc(2,"généreuse","à bierre");
$bas = new Jambes ("musclées","noueux","palmés");

$bob = new Human ($tete,$torse,$bas);

var_dump($bob);

// pour accéder aux yeux depuis l'objet human: $human->getHead()->getYeux()

//----------------------------------------------------exo autoload + constante------------------------------
function chargerClasse($classe) {
    require $classe.'.php';
}

spl_autoload_register('chargerClasse');

//cosntante sur User.php

$user= new User();
$user -> setNom("Barbatruc");
$user -> setPrenom('bubule');
$user->setAge(650);
print_r($user);
$user->plusUn()->moins2();
print_r($user);

//----------------------------------------------------héritage------------------------------

class Robot{
    public function greet(){
        return "Hello, ";
    }
}

class Android extends Robot{
    public function greet(){
        $greeting = parent::greet();
        echo $greeting."from android";
    }
}

$android = new Android();
$android->greet();

//----------------------------------------------------exo classe------------------------------

require("Specialite.php");
require("Professeur.php"); 

$prof = new Professeur(1,"Smith","Jhon","email@email.fr");

$spe = new Specialite("001","Java");
$prof->setSpecialites($spe);
$spe2 = new Specialite("002","Smalltalk");
$prof->setSpecialites($spe2);
$prof->afficheProf();
$prof->afficheSpecialites();

//----------------------------------------------------variable static------------------------------


class Maclasse {
    public static $count = 10 ;
    public function staticValue(){
        return self::$count ;
    }
}
class Herite extends Maclasse {
    public function parentValue(){
        return parent::$count;
    }
}


print Maclasse::$count . "\n"; 
$mc = new Maclasse();
print $mc->staticValue() . "\n";
print $mc::$count . "\n";

print Herite::$count . "\n";
$bar = new Herite();
print $bar->parentValue() . "\n";


//----------------------------------------------------polymorphisme par héritage------------------------------
  function lc($c){
    require_once $c."php";
  }

  function debug($o){
    echo "<pre>";
    print_r($o);
    echo "</pre>";
  }

  spl_autoload_register('lc');

  $audi1 = new Audi('Audi', 'ess',4, true);

  debug($audi1);
  echo get_class($audi1);

  $audi2 = new Voiture('Audi', 'ess',4, true);

  debug($audi2);
  echo get_class($audi2);

  $garage[] = new Audi('Audi', 'ess',4, true);
  $garage[] = new Peugeot('peugeot', 'fuel',4, false);
  $garage[] = new Audi('AudiQuatro', 'ess',4, true);

//debug($garage);

  foreach($garage as $car){
    print $car->getModel()."\n";
  }
?>