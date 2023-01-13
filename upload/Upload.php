<?php

echo "<pre>";
print_r ($_FILES);
echo "</pre>";

$dossier = "Telechargements/";
$fichier = $_FILES['fichier']['name'];

if(move_uploaded_file($_FILES['fichier']['tmp_name'],$dossier.$fichier)){
    echo "téléversement de votre fichier réussi";
}

?>