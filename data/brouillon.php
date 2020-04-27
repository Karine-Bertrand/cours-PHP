<!-- // var_dump($_GET);

// http: //localhost/cours%20php/data/cours/accueil.php?auteur=monAuteur&livre=monLivre&année=1999&score1=12&score2=12;

// echo "Le livre " . $_GET['livre'] . " ecrit par " . $_GET['auteur'] . " publié en " . $_GET['année'] . "</br>
<hr>";

// Créer un lien dans accueil.php qui ira vers article.php et qui enverra les données suivantes en GET :
// - title (un titre d'article)
// - author (un nom d'auteur d'article)
// Dans article.php, affichez ces données-là (title dans une balise H1, author dans une balise small) -->


<!-- // Allez sur accueil.php en passant deux variables integer : scoreManche1 et scoreManche2.
// Dans article.php, affichez le résultat de scoreMache1+scoreManche2.
// Afficher une erreur si scoreManche1 ou si scoreManche2 n’est pas renseigné.

$scoreManche1 = $_GET['score1'];
$scoreManche2 = $_GET['score2'];
$score = $scoreManche1 + $scoreManche2;

if (isset($_GET['score1']) && isset($_GET['score2'])) {/*($scoreManche1 > 0 && $scoreManche2 > 0) {*/
$msg = "Le score final est de : " . $score . "</br>";
} else {
$msg = "Valeur non renseignée" . "</br>";
}
echo $msg; -->
<?php

$etudiants = [
[
'prenom' => 'john',
'nom' => 'doe',
],
[
'prenom' => 'emma',
'nom' => 'doe'
]
];
// // On extrait la colonne de $movies dans laquelle on souhaite rechercher
// $colonne = array_column($etudiants, 'nom');
// // On trouve la clé de la liste de films qui correspond (0, 1, 2...)
// $keyCorrespondante = array_search('doe', $colonne);
// // Maintenant qu'on a la clé, on récupère le film via sa clé dans le tableau $movies
// $etudiantTrouve = $etudiants[$keyCorrespondante];
// var_dump($etudiantTrouve);

function nbIterations($nb){
    $count=0;
    $max = iconv_strlen(strval($nb));
    while ($max > 1) {
        $tabNum= str_split(strval($nb));
        $x = 1;
        for($i=0;$i<count($tabNum);$i++){
            $x=$x*$tabNum[$i];
        }
        $count=$count+1;
        $nb=$x;
        $max= iconv_strlen(strval($x));
    };
    
    return $count;
}    

echo nbIterations(999);


?>