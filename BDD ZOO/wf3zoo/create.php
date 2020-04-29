<?php

function ecrireSexe($genre)
{
    $sexe = "";
    if ($genre == "femelle") {
        $sexe = "1";
    } elseif ($genre == "mâle") {
        $sexe = "0";
    } else {
        $sexe = "0";
    }
    return $sexe;
}

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', "root", "root");
$request =  "INSERT INTO animal (espece, nom, taille, poids, date_naissance, pays_origine, sexe)
             VALUES (:espece, :nom, :taille, :poids, :date_naissance, :pays_origine, :sexe)";

$response = $bdd->prepare($request);
$response->execute([
    'espece'            =>  $_POST['espece'],
    'nom'               =>  $_POST['nom'],
    'taille'            =>  $_POST['taille'],
    'poids'             =>  $_POST['poids'],
    'date_naissance'    =>  $_POST['date_naissance'],
    'pays_origine'      =>  $_POST['pays_origine'],
    'sexe'              =>  $_POST['sexe'],
]);

header('Location: index.php');

?>

