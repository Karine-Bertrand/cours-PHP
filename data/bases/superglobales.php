<?php

// 1 - Récupérez la liste des superglobales de PHP.
// $GLOBALS :Référence toutes les variables disponibles dans un contexte global
// $_SERVER : tableau des informations comme les en-têtes, dossiers et chemins du script
// $_GET : tableau associatif des valeurs passées au script courant via les paramètres d'URL
// $_POST : tableau associatif des valeurs passées au script courant via le protocole HTTP et la méthode POST
// $_FILES : tableau associatif des valeurs téléchargées au script courant via le protocole HTTP et la méthode POST.
// $_COOKIE : tableau associatif de variables, passé au script courant, via des cookies HTTP.
// $_SESSION : tableau associatif des valeurs stockées dans les sessions, et accessible au script courant
// $_REQUEST : tableau associatif qui contient par défaut le contenu des variables $_GET, $_POST et $_COOKIE.
// $_ENV : tableau associatif de variable passé au script courant, via la méthode d'environnement.


// 2 - Retrouvez dans une des superglobales les données suivantes :

    // IP du visiteur $_SERVER
    echo "IP du visiteur : " . $_SERVER['REMOTE_ADDR'] . "</br>";

    // User-Agent du visiteur (c'est en fait sa configuration OS/Navigateur)
    echo "User-Agent : ". $_SERVER['HTTP_USER_AGENT']."</br>";

    // L'adresse du serveur web
    echo "adresse du serveur Web : ". $_SERVER['SERVER_ADDR']."</br>";

    // Le "timestamp" de quand a été éxécutée la requête vers le fichier PHP
    echo "timestamp de quand a été exécutée la requête vers le fichier PHP : ".$_SERVER['REQUEST_TIME']."</br>";






?>
