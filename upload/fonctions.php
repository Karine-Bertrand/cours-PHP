<?php


//vérification du fichier chargé
// on travaille sur $file = $_FILES['photo']

$file = $_FILES['photo'];
$pathinfoData = pathinfo($file['name']);
$fileName = $pathinfoData['filename'];
$fileExtension = $pathinfoData['extension'];

if ($fileExtension!='jpg' && $file['type']!='image/jpeg'){
    return "Erreur de type de fichier";}
    elseif ($file['size'] > 3*1024*1024){
        return "Fichier trop volumineux";}
    else{
    $nomPhoto = $fileName . "-" . uniqid() . "." . $fileExtension;
    move_uploaded_file($file('tmp_name'), __DIR__ . '/assets/img.' . $nomPhoto);
    return $nomPhoto;
}

