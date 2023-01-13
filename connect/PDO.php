<?php 
// Connection à la base de données
$dbname = "ecole" ; // nom de la Base De Donnees
$dbhost = "127.0.0.1" ; // url de host (ou 127.0.0.1)
$dbuser = "root" ;
$password= "" ;


$pdo = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=UTF8", $dbuser , $password) ;
// $pdo est la connection à la BDD 3 arguments pour PDO(host+dbname , user , password)
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // gestion des erreurs

?>