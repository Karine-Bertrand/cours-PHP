<?php
/******************************************************* */
// Calculez la distance de Hamming entre deux brins d'ADN.

// La distance de Hamming est le nombre de différences entre deux brins d'ADN homologues issus 
// de génomes différents avec un ancètre commun. On mesure le nombre minimum de points de mutation 
// qui pourrraient être apparus dans le chemin de l'évolution entre ces deux brins d'ADN. 
// On peut trouver ce nombre en comparant deux brins d'ADN et en comptant le nombre de nucléotides différents. 
// Par exemple :

//     GAGCCTACTAACGGGAT
//     CATCGTAATGACGGCCT
//     ^ ^ ^  ^ ^    ^^
// La distance de Hamming entre ces deux brins d'ADN est de 7 
// (car en comptant les différences caractère par caractère, on en trouve 7).
/******************************************************* */

// Exercice 1 : 
// Créez une fonction qui prend deux strings en paramètres contenant des brins d'ADN 
// (donc composées des caractères A, C, G, T) et trouvez leur distance de Hamming.

function distanceHamming($string1,$string2){

    if (strlen($string1) === strlen($string2)){
        $distance = 0;
        for ($i = 0; $i < strlen($string1); $i++) {
            if (substr($string1, $i, 1) != substr($string2, $i, 1)){
            $distance = $distance + 1;
            }
        }
        return "Les paires ". $string1 . " et " . $string2 . " ont une distance de Hamming de " . $distance;
    }
    else{
        throw new Exception("Les 2 chaînes n'ont pas la mêmes longueurs !");
    }

}

try {
    echo distanceHamming("GAGCCTACTAACGGGAT", "CATCGTAATGACGGCCT")."</br>";
    echo distanceHamming("GAGCCTGACCT","CCGTA");
} catch (Exception $e){
    echo "Erreur : ", $e->getMessage(), "</br>";
}
echo "<hr>";

// Exercice 2 :
// Assurez-vous que les deux brins aient la même longueur ! Sinon, retournez une erreur grâce à :
//     throw new Exception("Message d'erreur");
// function inverse($x)
// {
//     if (!$x) {
//         throw new Exception('Division par zéro.');
//     }
//     return 1 / $x;
// }

// try {
//     echo inverse(10) . "</br>";
//     echo inverse(0) . "</br>";
// } catch (Exception $e) {
//     echo 'Erreur : ',  $e->getMessage(), "</br>";
// }


// Exercice 3 : 
// Créez une autre fonction qui prend deux paramètres :
//     une longueur
//     un nombre de paires 
// Cette fonction va créer un nombre de paires de brins d'ADN de taille longueur toutes aléatoires,
//  et afficher leur distance Hamming paire par paire en appelant la fonction précédente. 
// Le résultat devrait être affichés sous la forme suivante :
// //     Les paires AAAAAAA et CCCCCCC ont une distance de Hamming de 10.
// //     Les paires ACGTGCA et GTCGAGC ont une distance de Hamming de 7.
// //     Les paires ATGCTCG et CGTCGTA ont une distance de Hamming de 8.
// //     Les paires ATGCGTA et TAGCTAG ont une distance de Hamming de 4.
function charRandom(){
    $hasard = rand(1,4);
    switch ($hasard) {
    case 1:
        $char = "A";
        break;
    case 2:
        $char = "C";
        break;
    case 3:
        $char = "G";
        break;
    case 4:
        $char = "T";
        break;
    default:
        $char = "";
        break;
    }
    return ($char);
}

function creationPaires($longueur,$nbPaires){

    for($i=0; $i<$nbPaires; $i++){
        $x1="";
        $x2="";
        for($j=1; $j<=$longueur; $j++){
            $x1 = $x1 . charRandom();
            $x2 = $x2 . charRandom();
            $tabAdn[$i]["chaine1"] = $x1;
            $tabAdn[$i]["chaine2"] = $x2;
        }
        $tabAdn[$i]["distance"] = distanceHamming($tabAdn[$i]["chaine1"], $tabAdn[$i]["chaine2"]);
    }
    for($affiche=0; $affiche<$nbPaires; $affiche++){
        echo $tabAdn[$affiche]["distance"]."</br>";
    }

}

$longueur = 10;
$nbPaires = 5;
creationPaires($longueur,$nbPaires);


?>
