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
echo "<hr>";


// /* autres exercices 
// Déclarez une variable et lui assigner la valeur "hello world". L'afficher avec echo puis avec var_dump.
$msg="hello world";
echo $msg ; "</br>";


// Déclarez une string. L'afficher.
$string = "exercice 1";
echo $string . "</br>";

// Déclarez un integer. L'afficher.
$int = 432;
echo $int . "</br>";

// Déclarez un boolean. L'afficher.
$bool = false;
echo $bool . "</br>";

// Déclarez un float. L'afficher.
$float = 432.4326;
echo $float . "</br>";

// Créez une nouvelle variable en prenant la variable déclarée dans l'exercice 3 et en lui ajoutant 42. Affichez le résultat.
$new = $int + 42;
echo $new . "</br>";

// Réassignez la variable déclarée en 4 par la valeur null.
$bool = null;
echo $bool . "</br>";

// Déclarez une constante nommée EXAMPLE_CONSTANT et assignez lui la valeur test.
const EXAMPLE_CONSTANT = "test";
echo EXAMPLE_CONSTANT;

// Déclarez $nombre1 et $nombre2 en leur donnant des integer. Créez une nouvelle variable contenant l'addition des deux.
$x1 = 32;
$x2 = 764;
$somme = $x1 + $x2;
echo $somme . "</br>";

// Créez une nouvelle variable contenant la soustraction des deux.
$moins = $x1 - $x2;
echo $moins . "</br>";

// Créez une nouvelle variable contenant la division des deux.
$div = $x1 / $x2;
echo $div . "</br>";

// Créez une nouvelle variable contenant la multiplication des deux.
$multipl = $x1 * $x2;
echo $multipl . "</br>";

// Créez une nouvelle variable contenant le modulo des deux.
$modulo = $x1%$x2;
echo $modulo . "</br>";

// Déclarez $float1 et $float2 en leur donnant des nombres à virgules avec un nombre suffisant de décimales après la virgule (par exemple: 42.234483). 
// Créez une nouvelle variable contenant la division des deux.
$float1 = 3.32542;
$float2 = 5.642331;
$div = $x1/$x2;
echo $div . "</br>";

// Créez une nouvelle variable contenant l'arrondi mathématique de la division des deux.
$arrondi = round($div) . "</br>";
echo $arrondi . "</br>";

// Créez une nouvelle variable contenant l'arrondi au nombre supérieur de la division des deux.

// Créez une nouvelle variable contenant l'arrondi au nombre inférieur de la division des deux.

// Reprennez $nombre1 et incrémentez-le de trois manières différentes :

// en le réassignant à sa valeur + 1
// en utilisant +=
// en utilisant ++
// Reprennez $nombre1 et décrémentez-le de trois manières différentes :

// en le réassignant à sa valeur- 1
// en utilisant -=
// en utilisant --
// Créez deux variables $string1 et $string2 contenant deux strings. Concaténez-les dans une nouvelle variable.

// Créez deux variables $nom et $prenom en string, et $codeAgent en integer. Créez une nouvelle variable contenant Bonjour agent [CodeAgent], ou devrais-je dire agent [Nom], [Prénom] [Nom] ! (remplacez les [var] par la variable correspondante grâce à la concaténation)

// En utilisant la fonction str_replace(), prenez la variable créée à l'exercice 21 et remplacez le mot agent par étudiant.

// En utilisant la fonction strlen(), trouvez la longueur de la variable créée à l'exercice 21.

// En utilisant la fonction substr(), récupérez les 4 premiers caractères de la variable créée à l'exercice 21.

// En utilisant la fonction substr(), récupérez les caractères 4 à 7 de la variable créée à l'exercice 21.

// Trouvez une fonction pour afficher la variable créée à l'exercice 21 tout en majuscules.

// Trouvez une fonction pour afficher la variable créée à l'exercice 21 tout en minuscules.*/
