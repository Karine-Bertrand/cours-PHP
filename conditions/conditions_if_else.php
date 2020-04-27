<?php

// Créer une variable age et l'initialiser avec une valeur. 
// Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.
$age=12; //48;
if ($age >= 18) {
    echo "Vous êtes majeur";
} else {
    echo "Vous êtes mineur";
};
var_dump($age);
echo "<hr>";

// Créer une variable isEasy de type booléan et l'initialiser avec une valeur. Afficher C'est facile ! si c'est vrai. 
// Dans le cas contraire afficher C'est difficile !. Bonus : L'écrire de deux manières différentes.
$isEasy = false; //true;
if ($isEasy) {
    echo "C'est facile !";
} else {
    echo "C'est difficile !";
};
var_dump($isEasy);
echo ($isEasy) ? "C'est facile !" : "C'est difficile !";
echo "<hr>";

// Créer deux variables age et gender. La variable gender peut prendre comme valeur : Homme ou Femme
//En fonction de l'âge et du genre afficher la phrase correspondante : homme majer | homme mienur | femme majeure | femme mineure
$age=48; //12;
$gender="Femme"; //"Homme";
if ($gender == "Homme") {
    if ($age >= 18) {
        echo "Vous êtes un homme et vous êtes majeur";
    } else {
        echo "Vous êtes un homme et vous êtes mineur";
    };
} else {
    if ($age >= 18) {
        echo "Vous êtes une femme et vous êtes majeur";
    } else {
        echo "Vous êtes une femme et vous êtes mineur";
    };
};
var_dump($age);
var_dump($gender);
echo "<hr>";


//L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. 
// Cette échelle va de 1 à 9. Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.
$result=4;
if ($result > 0) {
    switch ($result) {
        case 1:
            echo "Micro-séisme impossible à ressentir.";
            break;
        case 2:
            echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
            break;
        case 3:
            echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
            break;
        case 4:
            echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
            break;
        case 5:
            echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
            break;
        case 6:
            echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
            break;
        case 7:
            echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
            break;
        case 8:
            echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
            break;
        case 9:
            echo "Séisme capable de tout détruire sur une très vaste zone.";
            break;
        default:
            echo "Fuyez!";
    }
} else {
    echo ("calme plat!");
}
var_dump($result);
echo "<hr>";

//Traduire ce code avec des if et des else :
// <?php
//echo ($type == 'fire') ? 'Vous avez choisi Salamèche.' : 'Vous avez choisi Bulbizarre ou Carapuce !';
$type="fire";
if ($type == 'fire') {
    echo "Vous avez choisi Salamèche.";
} else {
    echo "Vous avez choisi Bulbizarre ou Carapuce !";
};
var_dump($type);
echo "<hr>";

//Traduire ce code avec des if et des else :
// <?php
//  echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
$age=4;
if ($age >= 18) {
    echo "Tu es majeur";
} else {
    echo "Tu n'es pas majeur";
};
var_dump($age);
echo "<hr>";

//Traduire ce code avec des if et des else :
//<?php
//  echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
$isOK=true;
if ($isOK == false) {
    echo "Ce n'est pas bon !";
} else {
    echo "c'est OK";
};
var_dump($isOK);
echo "<hr>";

//Traduire ce code avec des if et des else :
//<?php
//echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
//
$isOk=true;
if ($isOk) {
    echo "c'est ok !";
} else {
    echo "c'est pas bon !!!";
};
var_dump($isOk);
echo "<hr>";


// essai ternaire imbriqué
$panier=105;
// if ($panier > 0) {
//     if ($panier > 100) {
//         echo "vous avez une commande qui dépasse 100 eur, vous avez une promo";
//     } else {
//         echo "vous avez une commande en cours";
//     }
// } else {
//     echo "votre panier est vide";
// }
echo ($panier > 0) ? "vous avez une commande " . (($panier <= 100) ? "en cours" : "qui dépasse 100 eur, vous avez une promo") : "votre panier est vide";
var_dump($panier);
echo "<hr>";

?>