<?php

spl_autoload_register('chargerClasse');


class Client{
 

    public function afficheForm(){ ?>

        <form action="testBoutique.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" placeholder="votre Nom" required>

        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" placeholder="votre Prénom" required>

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="votre Email" required>

        <label for="password">Mot de passe</label>
        <input type="text" name="password" placeholder="votre Mot de Passe" required>

        <input type="hidden" Value="creerCompte" name="action">

        <input type="submit" value="Créer un compte">
    </form>

   <?php }

    public function creerCompte($nom,$prenom,$email, $password){

        $bdd = new BaseDonnees("127.0.0.1","boutique","root","");

        $pdo= $bdd->getPdo();

        try{

            $sql = $pdo->prepare("SELECT * FROM client WHERE email= ?");
            $sql->execute([$email]);
            $cpt = $sql->rowCount();
            
            if($cpt==0){
                $hp = password_hash($password,PASSWORD_DEFAULT);

                $sql=$pdo->prepare("INSERT INTO client (nom,prenom,email,password) VALUES(?,?,?,?)");
                $sql->execute([$nom,$prenom,$email,$hp]);
            
                $sql2=$pdo->prepare("SELECT * FROM client WHERE email= ?");
                $sql2->execute([$email]);
                
                $client=$sql2->fetch();
                
                $_SESSION["nom"] = $client['nom'];
                $_SESSION["prenom"] = $client['prenom'];
                $_SESSION['id']=$client['id'];

                ?>

            <h2>Bienvenue <?=$_SESSION["nom"]?> <?=$_SESSION["prenom"]?></h2>
            <p>Votre compte a été créé.</p>
            <a href="#">Retour vers la boutique</a>
            
            <?php } else{
                echo "Cette fiche existe déjà";
                } 
            } 
            
            catch (Exception $e) {
                echo $e->getMessage();
            }
        
    }


}


?>