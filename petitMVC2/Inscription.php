<?php

class Inscription {

    protected $pdo;


    public function __construct($dbh,$db,$dbu,$p){
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

    public function AfficherTous($table){
      try{
      
      $sql = $this->pdo->prepare("SELECT * FROM" .$table);
      $sql->execute();
      $result = $sql->fetchAll(PDO::FETCH_ASSOC);
      return $result[0]['name'];
      }

      catch(Exception $e){
        echo $e->getMessage();
      }
  }
}
?>