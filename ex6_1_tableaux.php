<?php

// 1 - Créer un tableau months et l'initialiser avec les valeurs suivantes : janvier à décembre
$months = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];

// 2 - Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.
echo $months[2] . "<hr>";

// 3 - Avec le tableau de l'exercice , afficher la valeur de l'index 5.
echo $months[5] . "<hr>";

// 4 - Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.
echo "avant : ". $months[7];
$months[7]="août";
echo " - après : ". $months[7] . "<hr>";

// 5 - Créer un tableau associatif avec comme index le numéro des départements de Auvergne-Rhône-Alpes 
//     sauf la Savoie et en valeur leur nom.
$dpt = [    "01" =>  "Ain", 
            "03" =>  "Allier", 
            "07" =>  "Ardèche",
            "15" =>  "Cantal",
            "26" =>  "Drôme",
            "38" =>  "Isère",
            "42" =>  "Loire",
            "43" =>  "Haute-Loire",
            "63" =>  "Puy-de-Dôme",
            "69" =>  "Rhône",
            //"73" => "Savoie",
            "74" => "Haute-Savoie",
];
var_dump($dpt);
echo "<hr>";
                
// 6 - Avec le tableau de l'exercice 5, afficher la valeur de l'index 63.
echo "index 63 : ". $dpt["63"] . "<hr>";

// 7 - Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Chambéry.
$dpt["73"] = "Savoie";
var_dump($dpt);
echo "<hr>";

// 8 - Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
echo "<ul>";
foreach ($months as $liste_mois){
    echo "<li>" . $liste_mois . "</li>";
}
echo "</ul>" . "<hr>";

// 9 - Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.
echo "<ul>";
foreach($dpt as $no_dpt => $nom_dpt){
    echo "<li>". $no_dpt . " : " . $nom_dpt . "</li>";
}
echo "</ul>"."<hr>";

// 10 - Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. 
//     Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département
foreach ($dpt as $no_dpt => $nom_dpt) {
    echo "Le département " . $nom_dpt . " a le numéro : " . $no_dpt . "</br>";
}
echo "<hr>";




?>
