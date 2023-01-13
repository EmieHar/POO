<?php

spl_autoload_register('chargerClasse');

class Produits{
   
    public function afficherProduits($table){

        $bdd = new BaseDonnees("127.0.0.1","boutique","root","");

        $pdo= $bdd->getPdo();

        $sql1 = $pdo->prepare(" SELECT * FROM " .$table);
        $sql1->execute();
        $result1 = $sql1->fetchAll(PDO::FETCH_ASSOC);

        foreach($result1 as $produit){?>
            <h2><?=$produit['nom_produit']?></h2>
        
            <img src="<?=$produit['photo']?>" alt="photo du produit">

            <?php if(isset($_SESSION['id'])){?>

                <p><?=$produit['description']?></p>
                <p> Prix: <?=$produit['prix']?> Euros <br>
                        Stock: <?=$produit['stock']?></p>
        
                <?php  if($produit['stock'] > 0){?>

                    <h2>Acheter</h2>
                    <hr>

                <?php } else{?>
                        <h2>Produit victime de son succès</h2>
                        <hr>
                <?php }
            } 
         
        } 

    }


}

?>