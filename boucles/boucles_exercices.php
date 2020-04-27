<?php

// liens exercices depuis fiche cours
// Créer une variable et l'initialiser à 0. Tant que cette variable n'atteint pas 10, il faut :
// l'afficher
// l'incrementer
$compteur = 0;
for($i=0;$i<$compteur;$i++){
    echo $compteur;
    $compteur = $compteur + 1;
}
echo "<hr>";

// Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100. 
// Tant que la première variable n'est pas supérieure à 20 :
// multiplier la première variable avec la deuxième
// afficher le résultat
// incrementer la première variable
$x1 = 0;
$x2 = 50;
while ($x1 <= 20) {
    echo $x1 * $x2;
    $x1 = $x1 + 1;
}
echo "<hr>";

// Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100. 
// Tant que la première variable n'est pas inférieure ou égale à 10 :
// multiplier la première variable avec la deuxième
// afficher le résultat
// décrémenter la première variable
$x1 = 100;
$x2 = 50;

// Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10, il faut :
// l'afficher
// l'incrementer de la moitié de sa valeur
$x = 1;
$x = $x + $x * 0.5;

// En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.
$msg = "On y arrive presque.";

// En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.
$msg = "C'est presque bon.";

// En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.
$msg = "On tient le bon bout.";

// En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.
$msg = "Enfin !!!!";


// * exercices vu en cours :

// *
// * *
// * * *
// * * * *
// * * * * *
$string = "*";
while (strlen($string) < 6) {
    echo $string . "<br>";
    $string = $string . "*";
}
echo "<hr>";

// Faites une boucle for qui affiche des nombres de 0 à 10.
for($i=0; $i<=10; $i++){
    echo $i . "</br>";
}
echo "<hr>";

// Faites une boucle for qui affiche uniquement des nombres pairs, de 0 à 10, grâce à un if au sein de la boucle
for ($i = 0; $i <= 10; $i++) {
    if($i%2 === 0){
        echo $i . "</br>";
    }
}
echo "<hr>";

// Faites une boucle for qui affiche des nombres la série suivante: 100, 50, 25, 12.5, 6.25, 3.125, 1.5625 
// (c'est à dire une boucle commençant à 100 et tant que $i > 1, divisez $i par deux)
for($i=100; $i>=1; $i=$i/2){
    if($i>1){
        echo $i . "</br>";
    }
}
echo "<hr>";

// * Afficher chaque données du tableau suivant avec une boucle For

$array = [2, 5, 8, 9, 13, 14, 18];
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . "<br>";
}
echo "<hr>";

/**
 * Additionner les nombres de 1 à 50 (1+2+3+4...+49+50)
 */
$somme=0;
for($i=0;$i<=50;$i++){
    $somme = $somme + $i;
}
echo "somme de 1 à 50 : ". $somme. "<hr>";

/**
 *
 * Afficher le schéma suivant (étoiles de 1 à 5 puis de 5 à 1)
 * 
 * * 
 * * * 
 * * * * 
 * * * * * 
 * * * * * 
 * * * * 
 * * * 
 * * 
 * 
 */
$string = "*****";
for ($i = 1; $i < 6; $i++) {
    echo str_repeat("*", $i);
    echo "<br>";
};
echo $string . "<br>";
for ($i = 1; $i < 6; $i++) {
    echo substr($string, 1) . "<br>";
    $string = substr($string, 1);
}
echo "<hr>";



/**
 * Boucle dans une boucle:
 * 
 * Afficher grâce à deux boucles imbriquées la liste des tables de multiplication :
 */

// for($x1 = 1; $x1 <= 9; $x1++){
//    echo "<strong>Table de : ". $x1 . "</strong> : <br>";
//    for($x2 = 1; $x2 <=9; $x2++){
//        echo $x1. " * ". $x2 . " = " . $x1*$x2 . "<br>";
//    }
// }
// echo "<hr>";

echo "<table border='1'>";
for($i=1; $i<=10; $i++){

    echo "<tr>";
    echo "<td height=20px width=20px>". $i . "</td>";

    for($j=2; $j<=10;$j++){
        echo "<td height=20px width=20px>" . $i * $j . "</td>";
    }

    echo "</tr>";
}
echo "</table>";
echo "<hr>";




/**
 * À partir du code suivant, créer un échiquier (un tableau qui alterne des cases noire/blanches sur les lignes et les colonnes)
 */

$black= "<td height=30px width=30px style='background-color: black; color: white'>";
$white= "<td height=30px width=30px style='background-color: white; color: black'>";

echo "<table border='1'>";
for ($i = 1; $i <= 8; $i++) {
    echo "<tr>";

    if($i%2 === 0){
        for ($j = 1; $j <= 8; $j++) {
            if ($j%2 === 0) {
                echo $white . "</td>";
            } else {
                echo $black . "</td>";
            }
        }
        echo "<tr>";

    }
    else{

        for ($k = 1; $k <= 8; $k++) {
            if ($k%2 === 0) {
                echo $black . "</td>";
            } else {
                echo $white . "</td>";
            }
        }
        echo "<tr>";
    }

}
echo "</table>";
echo "<hr>";



/**
* Le tableau précédent représente la liste des puissances des chevaux d'une course hippique.
* L'organisateur souhaite trouver les deux chevaux dont la puissance est la plus proche pour faire une course équilibréee.
* Faites une boucle et utilisez des variables pour trouver l'intervalle le plus petit possible !
*
* (Ex: dans le tableau de l'exercice précédent, les chevaux les plus proches sont 8 et 9, 13 et 14. 
* L'intervalle le plus petit est de "1", Il faut afficher "1".)
*/
// Indice : à chaque passage de la boucle, vous devez comparer à l’élément suivant pour connaître l’écart.
// Trouvez un moyen d’accéder à l’élément suivant dans la boucle, puis comparez-le à l’élément actuel.
// Ensuite, enregistrez cette valeur quelque part, afin de comparer les différents écarts à chaque fois.

$chevaux = [2, 5, 8, 9, 13, 14, 18];
$noCourse=0;
sort($chevaux);

for($i=0; $i < count($chevaux); $i++){
    if($i+1<count($chevaux)){
        if($chevaux[$i + 1] - $chevaux[$i]===1){
            $noCourse = $noCourse+1;
            $courses[$noCourse]["cheval1"]=$chevaux[$i];
            $courses[$noCourse]["cheval2"]=$chevaux[$i+1];
        }
    }
}
var_dump($courses);
echo "<hr>";


/**
 * Écrire une boucle qui affiche des nombres de 1 à 100.
 * - Si un nombre est divisible par 3, afficher "Fizz" à la place
 * - Si un nombre est divisible par 5, afficher "Buzz" à la place
 * - Si un nombre est divisible par 3 et par 5, afficher "FizzBuzz" à la place
 */

for($i=1; $i<=100; $i++){

    $info = $i;
    if($i%3 === 0){
        $info = "Fizz";    
    }
    if($i%5 === 0){
        $info = "Buzz";
    }
    if($i%3===0 && $i%5===0){
        $info = "FizzBuzz";
    }
    echo $info . "</br>";

}







 ?>