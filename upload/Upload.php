<?php

echo "<pre>";
print_r ($_FILES);
echo "</pre>";

$ext = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);
$extensions = ['png', 'jpg', 'gif', 'jpeg'];

$dossier = "Telechargements/";
$fichier = $_FILES['fichier']['name'];

if (in_array($ext, $extensions) && ($_FILES['fichier']['size'] <= 10000)) {

if(move_uploaded_file($_FILES['fichier']['tmp_name'],$dossier.$fichier)){
    echo "téléversement de votre fichier réussi";
} else {
    echo "erreur de téléversement";
}

} else{
    echo "extension de fichier non supporté ou fichier trop lourd";
}

?>