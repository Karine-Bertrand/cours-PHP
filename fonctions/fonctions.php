<?php

/************************************************************************************************ */
/************ SYNTHAXE ********************
 * 
 * Déclarer une fonction sans arguments
 */
        // function nomDeMaFonction()
        // {
        //     return "hello !";
        // }
/**
 * Appeler une fonction sans arguments
 */
        // echo nomDeMaFonction();
        // var_dump(nomDeMaFonction());
        // $result = nomDeMaFonction();
/**
 * Déclarer une fonction avec arguments
 */
        // function nomDeMaFonctionParametree($argument1, $argument2)
        // {
        //     return "hello ! Le résultat de l'opération est : " . ($argument1 - $argument2);
        // }
/**
 * Appeler une fonction avec arguments
 */
        // echo nomDeMaFonctionParametree(24, 12);
        // var_dump(nomDeMaFonctionParametree(25, 13));
        // $result = nomDeMaFonctionParametree(26, 14);
        // $nombre1 = 25;
        // $nombre2 = 15;
        // echo nomDeMaFonctionParametree($nombre1, $nombre2);
        // var_dump(nomDeMaFonctionParametree($nombre1, $nombre2));
        // $result = nomDeMaFonctionParametree($nombre1, $nombre2);

/************************************************exemples **************************************** */    
// function randomPassword(){
//     $password = "";
//     $chars = [ 0, 1, 2, 3, 'a', 'b', 'c', 'z', '$', '_', '&' ];
//     for($i=0;$i<10;$i++){
//         $hasard = array_rand($chars);
//         $password = $password . $chars[$hasard];
//     }
//     return $password;
// }
// echo randomPassword();
// echo "<hr>";

// function myAddition($nb1, $nb2){
//     $calcul = $nb1 + $nb2;
//     return $calcul;
// }
// echo myAddition(3280542, 49346842);
// echo "<hr>";


/************************************************************************************************* */
/***********************************  EXERCICES   ************************************************ */

/***
 * Exercice 1 : Créez une fonction "sayHello" qui affiche "Hello world!"
 */
function sayHello()
{
    $texte = "Hello world!";
    return $texte;
}
echo sayHello(); 
echo "<hr>";

/**
 * Exercice 2 : Créez une fonction qui prend en paramètres un nom et un prénom, et affichez les dans
 * la phrase "Bonjour John Doe !"
 */
function bonjour($nom, $prenom){
    $texte = "Bonjour ". $prenom . " " . $nom . " !";
    return $texte;
}
echo bonjour("Doe", "John");
echo "<hr>";

// Créez une fonction qui prend trois paramètres : $longeur, $largeur, $hauteur, 
// et qui calcule le volume d'un cube (longueurlargeurhauteur).
function volumeForme($long,$larg,$haut){
    $cube = $long * $larg * $haut;
    return "Volume de la forme ". $long . "x" . $larg . "x" . $haut . " : ". $cube;
}
echo volumeForme(10,3,2);
echo "<hr>";

/**
 * Exercice 3 : Créez une fonction qui prend deux nombres en paramètres, et qui retourne la multiplication des deux
 */
function myCalc($nb1, $nb2){
    $calcul = $nb1 * $nb2;
    return $calcul;
}
echo myCalc(3,4);
echo "<hr>";

/**
 * Exercice 4: 
 * En faites une fonction qui prend 2 paramètres :
 * 1. Une phrase
 * 2. Le mot à chercher dans la phrase
 * et qui remplace le mot cherché dans la phrase par "Jar Jar Binks"
    * (Par exemple: 
    * - paramètre 1 : la phrase "lorem ipsum dolor sit amet hello world"
    * - paramètre 2 : "hello"
 * La phrase retournée sera : "lorem ipsum dolor sit amet Jar Jar Binks world"
 */
function modifText($phrase, $word){
    $phrase = str_replace($word, "Jar Jar Binks", $phrase);
    return $phrase;
}
echo modifText("lorem ipsum dolor sit amet hello world", "hello");
echo "<hr>";

/**
 * Exercice 5:
 * Faire une fonction qui prend un array simple en paramètres (une liste)
 * Retourner une string qui contient une liste ul/li avec les éléments de la liste.
 */
function arrayToString($tableau){
    echo "<ul>";
    foreach ($tableau as $element){
        echo "<li>" . $element . "</li>";
    };
    echo "</ul>";
}
$tableau = [ 'pommes', 'poires', 'oranges', 'bananes'];
echo arrayToString($tableau);
echo "<hr>";

/**
 * Exercice 6 :
 * Faire une fonction "drunkenCapitalizer" qui prend une string en paramètres et la retourne
 * avec des lettres minuscules/majuscules aléatoirement. Par exemple :
 *      - paramètre : "hello world"
 *      - retourne : "HelLo woRlD"
 * 
 * Étapes de l'algorithme :
    * 1. Trouver comment découper une string lettre par lettre, pour avoir chaque lettre dans un tableau
    * 2. Faire une boucle dans ce tableau de lettres
    * 3. Dans la boucle: trouver comment avoir une valeur aléatoire pour gérer le hasard. En fonction du résultat
    * aléatoire, décider si on met le caractère en majuscule ( strtoupper() ) ou en minuscule ( strtolower() )
        * Pour gérer le hasard, vous pouvez par exemple générer un nombre aléatoire entre 0 et 10 et dire:
        * - si je tombe sur 0 - 4 : minuscule
        * - si je tombe sur 5 - 9 : majuscule
    * 4. Dans la  boucle, quand on a changé la lettre, mettre successivement les nouvelles lettres dans un tableau
    * 5. En dehors de la boucle, transformer le tableau en string
    * 6. Retourner la string !
 */
function drunkenCapitalizer($string){
    $nbChar = strlen($string);
    for ($i=0; $i < $nbChar; $i++) { 
       $letters[] = substr($string,$i,1);
    }
    for($i=0; $i<count($letters); $i++){
        $change = rand(0,9);
        if($change<=4){ 
            $newString[]=strtoupper($letters[$i]);
        }
        else{
            $newString[]=strtolower($letters[$i]);
        }
    }
    $texte="";
    for($i=0;$i<count($newString);$i++){
        $texte=$texte . $newString[$i];
    }
    return $texte;
}
echo drunkenCapitalizer("majuscules? minuscules?");
echo "</br>";

function myCapitalizer($string){
    $texte="";
    for ($i = 0; $i < strlen($string); $i++) {
        $change = rand(0, 9);
        if ($change <= 4) {
            $texte = $texte . strtoupper(substr($string, $i, 1));
        } else {
            $texte = $texte . strtolower(substr($string, $i, 1));
        }
    }
    return $texte;
}
echo myCapitalizer("version optimisée sans les tableaux !");
echo "<hr>";


/**
 * Exercice 7 :
 * Comme pour l'exercice 5 qui s'appliquait à une liste, faites une fonction qui prend un tableau à deux dimensions et en fait une liste ul/li :
    * Exemple  :
        * $array = [
        *     'ete'     => [ 'aubergines', 'pêches'],
        *     'automne' => [ 'aubergines', 'pêches'],
        *     'hiver'   => [ 'aubergines', 'pêches'],
        *     'printemps' => [ 'aubergines', 'pêches'],
        * ];
 */
function myTabDeuxDim($tableau)
{
    echo "<ul>";
    foreach ($tableau as $element => $valeur) {
        echo "<li><strong>" . $element . "</strong></li>";
        echo "<ul>";
        foreach ($valeur as $key => $val) {
            echo "<li>" . $val . "</li>";
        }
        echo "</ul>";
    }
    echo "</ul>";
}
$tableau  = [
     'ete'     => [ 'aubergines', 'pêches'],
     'automne' => [ 'aubergines', 'pêches'],
     'hiver'   => [ 'aubergines', 'pêches'],
     'printemps' => [ 'aubergines', 'pêches'],
 ];
echo myTabDeuxDim($tableau);
echo "<hr>";


/**
 * Exercice 8 : Triangle de Pascal
 * Faites une fonction qui prend en paramètres un nombre "n".
 * La fonction retournera les n premières lignes du triangle de Pascal. C'est un "triangle"
 * de nombres dont les nombres inférieurs sont la somme des deux nombres du dessus :
    * https://www.w3resource.com/w3r_images/pascal-traingle.png 
 * 
 * Exemple :
    * Paramètres : n = 6
    * Résultat : 
    * 1
    * 1 1
    * 1 2 1
    * 1 3 3 1
    * 1 4 6 4 1
    * 1 5 10 10 5 1
 * 
 * Les résultats seront présentés sous la forme d'un tableau de tableaux : chaque ligne serait un sous-tableau du tableau principal */

// $taille = 5;
// for ($ligne=0; $ligne<$taille; $ligne++) {
//     $tabPascal[$ligne][0]=1;
//         for ($colonne=1; $colonne<$ligne; $colonne++) {
//             // if ($ligne=$colonne) {
//                 // $tabPascal[$ligne][$colonne]=1;
//             // }
//             // else{
//                 $tabPascal[$ligne][$colonne] = $tabPascal[$ligne-1][$colonne-1] + $tabPascal[$ligne-1][$colonne];
//             // }
//         }
// }
// var_dump($tabPascal);

function trianglePascal($number)
{

    // On prépare notre tableau de lignes
    $lignes = [
        [1] // La ligne 1 est forcément "1"
    ];

    // On fait une boucle allant de 1 à $number (le nombre de lignes souhaité)
    for ($i = 1; $i < $number; $i++) {

        // On récupère la ligne précédente (indice $i-1)
        $lignePrecedente = $lignes[$i - 1];

        // On prépare la ligne actuelle en ajoutant le premier "1" obligatoire
        $ligneActuelle = [1];

        // On fait une boucle allant de 0 jusqu'au nombre d'éléments de la ligne précédente
        // afin de scanner les élements de la ligne précédente et faire les additions
        for ($j = 0; $j < count($lignePrecedente); $j++) {

            // On vérifie si l'on possède bien deux nombres au dessus
            if (isset($lignePrecedente[$j]) && isset($lignePrecedente[$j + 1])) {

                // Si oui, on les récupère :
                $nombre1 = $lignePrecedente[$j];
                $nombre2 = $lignePrecedente[$j + 1];

                // On les ajoute et on les met dans la ligne actuelle
                $ligneActuelle[] = $nombre1 + $nombre2;
            }

            // Sinon, on est sur le dernier nombre, il n'y a rien à ajouter, on termine sur le "1" obligatoire :
            else {
                $ligneActuelle[] = 1;
            }
            // On a fini de scanner la ligne précédente, on sort de la boucle "nombres"
        }

        // On ajoute la ligne que l'on vient de créer au tableau de lignes
        $lignes[] = $ligneActuelle;

        // Une fois le nombre de lignes nécessaire atteint, on sort de la boucle "lignes"
    }

    return $lignes; // On retourne le tableau de lignes

    // affichage sous forme de tableau
    echo "<table border='1'>";
    for ($i = 1; $i <= $number; $i++) {
        echo "<tr>";
        echo "<td>" . $lignes[$i] . "</td>";
        for ($j = 1; $j <= $number; $j++) {
            echo "<td>" . $lignes[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

var_dump(trianglePascal(5));
echo "<hr>";


/**
 * Exercice 9 : Fonctions récursives
 * Faites une fonction "récursive" qui va créer un ul/li pour tout tableau passé en paramètres.
 * Une fonction récursive, c'est une fonction qui va s'appeler elle-même.
 * 
 * Exemple  :
 * 
 * $array = [
 *     'ete'     => [ 'aubergines', 'pêches'],
 *     'automne' => [ 'aubergines', 'pêches'],
 *     'hiver'   => [ 'aubergines', 'pêches'],
 *     'printemps' => [ 'aubergines', 'pêches'],
 * ];
 */
/**
 * Cette fonction prend un nombre $nombre et aditionne tous les nombres
 * un par un jusqu'à ce nombre. Par exemple :
 * 
 * $nombre = 5
 * Résultat = 1 + 2 + 3 + 4 + 5
 *  
 * La fonction va calculer la somme de $nombre avec son nombre précédent :
 * 5 + (nombre précédent : 4) = 9
 * Ensuite, on continue avec le nombre encore précédent :
 * 9 + (nombre précédent : 3) = 12
 * Ensuite, on continue avec le nombre encore précédent :
 * 12 + (nombre précédent: 2) = 14
 * Ensuite, on continue avec le nombre encore précédent :
 * 12 + (nombre précédent: 1) = 15
 * Ensuite, on continue avec le nombre encore précédent :
 * 12 + (nombre précédent: 0) = 15 => fin du script (on arrête quand $nombre = 0)
 * 
 * La fonction fait  le job suivant : "somme de nombre + nombre précédent". C'est en effet ce qu'on veut
 * faire à chaque étape ! Et qui fait ce job ? La fonction, justement !
 * 
 * On appelle donc la fonction dans elle-même afin de continuer le calcul "récursivement"
 * jusqu'à ce que $nombre soit égal à zéro.
 */
function somme($nombre)
{
    // Si mon nombre est différent de zéro, je fais mon calcul :
    if ($nombre != 0) {
        // La somme est :
        // le nombre actuel +
        // la foncion somme() sur le nombre précédent
        // Qui elle même prend le nombre précédent...
        // Et lui ajoute la fonction somme sur le nombre encore précédent...
        // et ainsi de suite !
        $somme = $nombre + somme($nombre - 1);
        return $somme;
    } else {
        return $nombre;
    }
}


function myRecursive($tableau)
{
        echo "<ul>";
        foreach($tableau as $cle => $valeur){ /* on écrit soit "$cle" soit "$valeur" */
                if(is_array($valeur)){
                    echo "<li>" . $cle . "</li>";
                    myRecursive($valeur);
                }
                else{
                    echo "<li>" . $valeur . "</li>";
                }
        }
        echo "</ul>";
}

$saison = [
    "printemps" => [
        "tomates"    => [
            "prix"  =>  "1.20",
            "qté"    => "5"
        ]
    ],
    "été" => [
        "navets"    => [
            "prix"  =>  "1.50",
            "qté"    => "10"
        ],
        "fraise"    => [
            "prix"  =>  "4.00",
            "qté"   =>  "100"
        ],
    ],
    "automne" => [
        "carottes"    => [
            "prix"  =>  "1.60",
            "qté"    => "15"
        ]
    ],
    "hiver" => [
        "oignons"    => [
            "prix"  =>  "1.90",
            "qté"    => "20"
        ]
    ]
];
myRecursive($saison);
echo "<hr>";




?>




