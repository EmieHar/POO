<?php

require_once 'Inscription.php';

class Etudiant extends Inscription {
    private $nom;
    private $prenom;
    private $email;

    public function __construct($nom, $prenom, $email){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }
    
    public function Creer($nom, $prenom, $email) {
        $sql = $this->pdo->prepare("INSERT INTO student (name,firstname,email) VALUES (".$nom.",". $prenom."," .$email.")");
        $sql->execute();
        return "Etudiant créé";

    }

    public function Supprimer($nom, $prenom, $email) {
        $sql = $this->pdo->prepare("DELETE FROM student WHERE student.name=".$nom." AND student.prenom =" .$prenom." AND student.email =" .$email);
        $sql->execute();
        return "Etudiant supprimé";
    }

    public function Modifier($nom, $prenom, $email, $id){
        $sql = $this->pdo->prepare("UPDATE student SET student.name=".$nom.", student.prenom=".$prenom.", student.email=".$email." WHERE student.id=".$id);
        $sql->execute();
        return "Informations mises à jour";
    }
    
    public function AfficherTous($table){
        $sql = $this->pdo->prepare("SELECT * FROM" .$table);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result[0]['name'];
    }

    public function Afficher1Seul($table, $id){
        $sql = $this->pdo->prepare("SELECT * FROM" .$table. "WHERE id=".$id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


}
?>