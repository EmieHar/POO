<?php

class DB{
  

    private $pdo;


    public function __construct($db,$dbh,$dbu,$p){
      try
      {
        $this->pdo = new PDO("mysql:host=".$dbh.";dbname=".$db.";charset=UTF8", $dbu , $p);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } 
      
      catch(Exception $e)
      {
        echo $e->getMessage();
      }
    }
        

    public function vaChercherTousLes($table){
        $sql = $this->pdo->prepare("SELECT * FROM " .$table);
        $sql->execute();
        $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    }

    public function vaChercherLe($tb,$id){
        $sql2 = $this->pdo->prepare( "SELECT * FROM ". $tb. " WHERE id=".$id );
        $sql2->execute();
        $resultat =$sql2->fetch(PDO::FETCH_ASSOC);
        return $resultat;
    }

    public function vaChercherJointure($sql){
        $sql3 = $this->pdo->prepare($sql);
        $sql3->execute();
        $resultat = $sql3->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    }
}

