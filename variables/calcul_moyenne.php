<?php
/**
* Écrire avec des conditions, un programme prenant un ensemble de trois notes sur 20, par exemple :
*
* $maths = 18;
* $anglais = 12;
* $histoire = 9;
*
* - Si une des note est inférieure à 6, affichez "La note ** est éliminatoire." (** étant la valeur de la note)
* - Si la moyenne est dans l'intervalle [15:20], affichez "Mention très bien !"
* - Si la moyenne est dans l'intervalle [15:18[, affichez "Mention bien !"
* - Si la moyenne est dans l'intervalle [10:15[, affichez "Mention assez bien !"
* - Dans tous les cas, affichez la moyenne.
*/

$maths = 18;
$anglais = 12;
$histoire = 5;

$moy= round(($maths+$anglais+$histoire) / 3);
$text_resultat="Moyenne générale de : ". $moy. "<br>";
$mention="";

$valeur=0;
$elim="";
if ($maths<6) {
    $elim="maths";
    $valeur=$maths;
}
if ($anglais<6) {
    $elim = "anglais";
    $valeur = $anglais;
}
if ($histoire<6) {
    $elim = "histoire";
    $valeur = $histoire;
}
$text_elim="La note de " . $valeur . " en ". $elim. " est éliminatoire";

// if ($valeur=0) {
    if ($moy>=18) {
       $mention="Mention très bien";
    } elseif ($moy<18 && $moy>=15){
       $mention="Mention assez bien";
    } elseif ($moy>=10){
        $mention="Mention bien";
    } elseif ($moy<10){
        $mention="sans mention";
    }
// } else {
//    $mention="non admis : ".$text_elim;
// }

echo $text_resultat . $mention;
var_dump($moy);
var_dump($mention);

?>
