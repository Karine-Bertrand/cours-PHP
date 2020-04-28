<?php

include('dataArray.php');

$email = $_POST['getmail'];
$psw = $_POST['getpwd'];
$role = $_POST['getrole'];

$listMail = array_column($users, 'email');
$cle = array_search($email, $listMail);

$titre = "Bravo !";
$infoUser = "Vous êtes connecté, voici les plans du V2 ... ";
$suite = true;

if ($email === "") {
    $suite = false; 
    $titre= "Echec !";
    $infoUser = "Le mail n'est pas renseigné";
}
if ($suite && $email != $users[$cle]['email']) {
$suite = false;
$titre = "Echec !";
$infoUser = "Le mail est incorrect";
}

if ($psw === ""){
    $suite = false; 
    $titre= "Echec !";
    $infoUser = "Le mot de passe n'est pas renseigné";
}
 if ($suite && $psw != $users[$cle]['password']){
    $suite = false; 
    $titre= "Echec !";
    $infoUser = "Le mot de passe est incorrect";
}

if ($role === "") {
    $suite = false; 
    $titre= "Echec !";
    $infoUser = "Le rôle n'est pas renseigné";
}
if ($suite && $role != $users[$cle]['role']) {
    $suite = false; 
    $titre= "Echec !";
    $infoUser = "Le rôle est incorrect";
}
?>


<div class="container mt-3">
    <div class="row">
        <div class="col">
                <h1><?= $titre ?></h1> 
                <p><strong><?= $infoUser ?></strong></p>
        </div>
    </div>
</div>