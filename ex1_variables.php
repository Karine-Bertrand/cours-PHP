<?php

// Créer une variable name et l'initialiser avec la valeur de votre choix. Afficher son contenu.
$name="My Name";
echo "ex.1 : " . $name . "<hr>";

// Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. 
// Attention age est de type entier. Afficher leur contenu.
$lastname = "Nom";
$firstname = "Prénom";
$age = 28;
echo "ex.2 : " . $lastname . " " . $firstname . " " . $age . "<hr>";

// Créer une variable km. L'initialiser à 1. Afficher son contenu. Changer sa valeur par 3. 
// Afficher son contenu. Changer sa valeur par 125. Afficher son contenu.
$km=1;
echo "ex.3 : " . $km . "<br>";
$km = 3;
echo "ex.3 : " . $km . "<br>";
$km = 125;
echo "ex.3 : " . $km . "<hr>";

//Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan 
//et les initialiser avec une valeur de votre choix. Les afficher.
$v1 = "chaîne";
$v2 = 7;
$v3 = 15.28;
$v4 = true;
echo "ex.4 : " . $v1 . " " . $v2 . " " . $v3 . " " . $v4 . "<hr>";

//Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur. Donner une valeur à cette variable et l'afficher.
$v5 = null;
echo "ex.5 : " . $v5 . "<br>";
$v5 = 28;
echo "ex.5 : " . $v5 . "<hr>";

//Créer une variable name et l'initialiser avec la valeur de votre choix. Afficher : "Bonjour" + name + ", comment vas tu ?".
echo "ex.6 : Bonjour " . $name . ", comment vas-tu?" . "<hr>";

//Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.
// Attention age est de type entier. Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".
echo "ex.7 : Bonjour " . $lastname . " " . $firstname . ", tu as " . $age . " ans." . "<hr>";

//Créer 3 variables. Dans la première mettre le résultat de l'opération 3 + 4. 
//Dans la deuxième mettre le résultat de l'opération 5 * 20. 
//Dans la troisième mettre le résultat de l'opération 45 / 5. Afficher le contenu des variables.
$x=3+4;
$y=5*20;
$z=45/5;
echo "ex.8 : 3+4=" . $x . " || 5*20=" . $y . " || 45/5=" . $z;
