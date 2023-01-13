<?php
require "DB.php";

$testdb = new DB("boutique","127.0.0.1","root","");

$lesUsers = $testdb->vaChercherTousLes("client");

echo "<pre>";
var_dump($lesUsers);
echo "</pre>";
echo "<hr>";

$leUser =$testdb->vaChercherLe("client",4);
echo "<pre>";
var_dump($leUser);
echo "</pre>";
echo "<hr>";

$req = "SELECT produit.* FROM panier,produit WHERE produit.id = panier.id_produit AND panier.id = 1";
$commande = $testdb->vaChercherJointure($req);
echo "<pre>";
var_dump($commande);
echo "</pre>";
echo "<hr>";

?>