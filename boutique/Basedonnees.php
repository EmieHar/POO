<?php
spl_autoload_register('chargerClasse');

class BaseDonnees{
    private $pdo;

    public function __construct($dbhost,$dbname,$root,$password){
        try{
            $this->pdo = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=UTF8", $root , $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }

        catch(Exception $e){
            echo $e->getMessage();
         } 
    }

    public function getPdo(){
        return $this->pdo;
    }

    public function afficheFormConnexion(){ ?>

        <form action="testBoutique.php" method="POST">

        <label for="email">Votre adresse email</label>
        <input type="email" name="email" placholder="adresse@mail.com" required>

        <label for="password">Votre mot de passe</label>
        <input type="password" name="password" required>

        <input type="hidden" Value="connexion" name="connexion" >

        <input type="submit" value="Se connecter" name="form">

        </form>

    <?php }
    
    public function seConnecter($email,$password){


        try {

           $sql1 = $this->pdo->prepare(" SELECT client.id, client.nom, client.prenom, client.password FROM client WHERE client.email= ?");
           $sql1->execute([$email]);
        
            if ( $sql1->rowCount() == 1) {
        
                
               $client= $sql1->fetch(PDO::FETCH_ASSOC);

               //lorsque se connecte, affiche les produits

               if(password_verify($password, $client['password'])){ 
                
                $_SESSION["nom"] = $client['nom'];
                $_SESSION["prenom"] = $client['prenom'];
                $_SESSION['id'] = $client['id'];
        
                //    header('Location:produits.php'); 
                $affiche = new Produits();
                $vu = $affiche->afficherProduits("produit");
                echo "<pre>";
                var_dump($vu);
                echo "</pre>";
                echo "<hr>";

                } else {
                    echo "mauvais mot de passe";
                }

                return $client;
                
            } 
            else {
                    echo "Aucun compte n'a été trouvé, veuillez en créer un ou modifier vos informations de connexion";
                }
                
        }

        catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }

    public function seDeco(){
        session_unset();
        session_destroy();
    }
            
}


?>