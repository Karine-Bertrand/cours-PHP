<?php
//Soit un tableau $a = array( 0, 1, 2, 3, 4 );, comment afficher la valeur 3 du tableau ?
$a = array(0, 1, 2, 3, 4);
echo $a[4] . "<hr>";

//Afficher la valeur 3 du tableau suivant :
$a = [
  "zero"  => 0,
  "un"    => 1,
  "deux"  => 2,
  "trois" => 3,
  "quatre"=> 4,
];
echo $a["trois"] . "<hr>";

//Afficher la valeur 3 du tableau suivant :
$a = [
    [0, 1],
    [2, [3]],
    "zero"  => 0,
    "un"    => 1,
    "deux"  => 2,
    "quatre" => 4,
];
var_dump($a[1][1]);
echo "<hr>";

// Afficher la valeur 3 du tableau suivant :
$a = [
    "a" => [
        "b" => 0,
        "c" => 1,
    ],
    "d" => [
        "e" =>  2,
        "f" => [
            "g" => 3
        ]
    ]
];
var_dump($a["d"]["f"]);
echo "<hr>";

// Terreur ! Un élève a oublié d'indenter son code. Indentez cet array correctement et corrigez l'erreur.
// $a = [ "a" => [
//    "b" => 0,  "c" => 1,],"d" => [
//  2, "f" =>    [
//    "g" => 3
//  ]];

$a = [ 
    "a" => [
        "b" => 0,  
        "c" => 1
    ],
    "d" => [
        2, 
        "f" =>    [
            "g" => 3
         ]
    ]
]; //crochet fermant manquant
var_dump($a);
echo "<hr>";

// Trouver la somme de cet tableau de nombres : $a = [ 0, 1, 2, 3, 4, 5, 6 ];
$a = [0, 1, 2, 3, 4, 5, 6];
$x = 0;
foreach($a as $i){
    $x += $i;
}
echo $x . "<br>" . "<hr>";

// Créez un array $films contenant les données suivantes :
// - The Shawshank Redemption
//     Année : 1994
//     Note : 9.2		
// - The Godfather
//     Année : 1972
//     Note : 9.1		
// - The Dark Knight
//     Année : 2008
//     Note : 9.0		
// - The Lord of the Rings: The Return of the King
//     Année : 2003
//     Note : 8.9
// - Pulp Fiction
//     Année : 1994
//     Note : 8.9
$films = [
    "The Shawshank Redemption" => [
        "année" => "1994",
        "note"  => "9.2"
    ],
    "The Godfather" => [
        "année" => "1972",
        "note"  => "9.1"
    ],
    "The Dark Knight" => [
        "année" => "2008",
        "note"  => "9.0"
    ],
    "The Lord of the Rings: The Return of the King" => [
        "année" => "2003",
        "note"  => "8.9"
    ],
    "Pulp Fiction" => [
        "année" => "1994",
        "note"  => "8.9"
    ],

];
var_dump($films);
echo "<hr>";

// Affichez tous ses éléments grâce à une boucle foreach($films as $film) { /*...*/ } :
    // Affichez ces éléments, toujours grâce à une boucle, plutôt dans une liste <ul> <li>.
echo "<ul>";
foreach ($films as $film => $titre){
    echo "<li>" . $film . " : " . "</li>";
    echo "<ul>";
    foreach ($titre as $element => $valeur){
        echo "<li>" . $element . " : ". $valeur . "</li>";
    }
    echo "</ul>";
}
echo "</ul>" . "<hr>";

// Soit le tableau suivant :
// - The Shawshank Redemption : Frank Darabont
// - The Godfather : Francis Ford Coppola
// - The Dark Knight : Christopher Nolan
// - The Lord of the Rings: The Return of the King : Peter Jackson
// - Pulp Fiction : Quentin Tarantino
// Créez un tableau de clés => valeurs avec ce tableau, avec le film en clé et le réalisateur en valeur rappel :
$films = [
    "The Shawshank Redemption" =>  "Frank Darabont",
    "The Godfather" =>  "Francis Ford Coppola",
    "The Dark Knig" =>  "Christopher Nolan",
    "The Lord of the Rings: The Return of the King" =>  "Peter Jackson",
    "Pulp Fiction" =>  "Quentin Tarantino",
];
var_dump($films);
echo "<hr>";


// 1 - Créer un tableau months et l'initialiser avec les valeurs suivantes : janvier à décembre
$months = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];
var_dump($months);
echo "<hr>";

// 2 - Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.
echo $months[2] . "<hr>";

// 3 - Avec le tableau de l'exercice , afficher la valeur de l'index 5.
echo $months[5] . "<hr>";

// 4 - Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.
echo "avant : " . $months[7];
$months[7] = "août";
echo " - après : " . $months[7] . "<hr>";

// Créez un tableau associatif contenant Allemagne, Espagne, Italie, France, Portugal 
// et leur capitales, sous la forme suivante : "France" => "Paris".
$pays = [
    "France"    =>  "Paris",
    "Allemagne" =>  "Berlin",
    "Italie"   =>  "Rome",
    "Espagne"   =>  "Barcelone",
    "Portugal"  => "Lisbonne"
];
var_dump ($pays)."</br>";
echo "Capitale Italie : " . $pays["Italie"] . "</br>";

// Créez un tableau associatif contenant les pays de l'exercice 5, 
// en ajoutant un sous-tableau contenant la capitale 
// et la population de chaque pays. 
// Exemple :

// "france" => [
//     "capitale" => "Paris",
//     "population" => "70000000"
// ]
$pays = [
    "France"    =>  [
        "capitale"  =>  "Paris",
        "population"    =>  "70000000"
    ],
    "Allemagne" =>  [
        "capitale"  =>  "Berlin",
        "population"    =>  "50000000"
    ],
    "Italie"   => [
        "capitale"  =>  "Rome",
        "population"    =>  "40000000"
    ],
    "Espagne"   =>  [
        "capitale"  =>  "Barcelone",
        "population"    =>  "80000000"
    ],
    "Portugal"  => [
        "capitale"  =>  "Lisbonne",
        "population"    =>  "30000000"
    ]
];
var_dump($pays);
// Affichez la population de la France
echo "France : ".$pays["France"]["population"]."</br>";
// Affichez la phrase suivante : "La France a pour capitale Paris et possède une population de 70000000 habitants."
echo "La France a pour capitale ".$pays["France"]["capitale"]." et possède une population de ".$pays["France"]["population"]." habitants."."</br>";
// Afficher le mot "France" grâce à array_keys($pays). 
// Cette fonction vous retourne un nouveau tableau (liste), contenant uniquement les clés du tableau demandé ! 
// Pour accéder à un élément de ce nouveau tableau, comme c'est une liste, on y accède ainsi : 
//     $keys = array_keys($pays); puis $keys[0] pour avoir la première clé de $pays.
$keys = array_keys($pays);
var_dump($keys[0]);
// Affichez le mot "capitale". Pour cela, vous devez utiliser array_keys() sur un des sous-tableau du tableau de l'exercice 7. 
// Par exemple: array_keys( $pays['france'] ), ou encore, pour réutiliser le code de l'exercice 9, array_keys( array_keys( $pays[0] ) ).
$keys = array_keys($pays["France"]);
var_dump($keys[0]).">:br>";
// En utilisant le tableau de l'exercice Tableaux:1, faites une boucle foreach pour afficher tous les mois dans un var_dump.
$months = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];
foreach($months as $mois){
    var_dump($mois);
}
echo "</br>";
// En utilisant le tableau de l'exercice Tableaux:5, faites une boucle foreach pour afficher la phrase Le pays PAYS a pour capitale CAPITALE.
$pays = [
    "France"    =>  [
        "capitale"  =>  "Paris",
        "population"    =>  "70000000"
    ],
    "Allemagne" =>  [
        "capitale"  =>  "Berlin",
        "population"    =>  "50000000"
    ],
    "Italie"   => [
        "capitale"  =>  "Rome",
        "population"    =>  "40000000"
    ],
    "Espagne"   =>  [
        "capitale"  =>  "Barcelone",
        "population"    =>  "80000000"
    ],
    "Portugal"  => [
        "capitale"  =>  "Lisbonne",
        "population"    =>  "30000000"
    ]
];
foreach ($pays as $key1 => $value1) {
    foreach ($value1 as $key2 => $value2) {
        if($key2 === "capitale"){
            echo "Le pays " . $key1 . " a pour capitale " . $value2 . ". </br>";
        }
    }
}

// En utilisant le tableau de l'exercice Tableaux:7, faites une boucle foreach pour afficher la phrase 
// Le pays [PAYS] a pour capitale [CAPITALE] et pour population [POPULATION] habitants.

// 5 - Créer un tableau associatif avec comme index le numéro des départements de Auvergne-Rhône-Alpes 
//     sauf la Savoie et en valeur leur nom.
$dpt = [
    "01" =>  "Ain",
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
echo "index 63 : " . $dpt["63"] . "<hr>";

// 7 - Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Chambéry.
$dpt["73"] = "Savoie";
var_dump($dpt);
echo "<hr>";

// 8 - Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
echo "<ul>";
foreach ($months as $liste_mois) {
    echo "<li>" . $liste_mois . "</li>";
}
echo "</ul>" . "<hr>";

// 9 - Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.
echo "<ul>";
foreach ($dpt as $no_dpt => $nom_dpt) {
    echo "<li>" . $no_dpt . " : " . $nom_dpt . "</li>";
}
echo "</ul>" . "<hr>";

// 10 - Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. 
//     Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département
foreach ($dpt as $no_dpt => $nom_dpt) {
    echo "Le département " . $nom_dpt . " a le numéro : " . $no_dpt . "</br>";
}
echo "<hr>";




//tableau
$array = [
    "vendredi",
    "17",
    "avril",
    "2020",
    [
        "printemps",
        "été",
        "automne",
        "hiver",
    ]
];

// var_dump($array);
// echo $array[0]."<br>";
// echo $array[4][0]."<hr>";

/**
 * 3. a. Déclarez un tableau simple :
 * => "tomates", "navets", "carottes", "oignons"
 * 3. b. Affichez dans un var_dump la valeur "carottes".
 */
/**
 * 4. a. Déclarez un tableau associatif, qui contient des des noms de légumes en clés (ceux-ci dessus par exemple), et  en valeur le prix du légume.
 * 4. b. Affichez dans un var_dump la valeur du prix du 3ème légume.
 */
/**
 * 5. a. Déclarez un tableau multi-dimentionnel, qui contient des saisons, lesquelles contiennent des 2 légumes, 
 * lesquels contiennent les clés "quantité" et "prix"
 * 5. b. Affichez dans un var_dump le prix du premier légume d'été.
 */

$legumes = [
    "tomates",
    "navets",
    "carottes",
    "oignons"
];
// var_dump($legumes). "<br>";
// echo "tableau simple : ". $legumes[2]. "<hr>";

$legumes = [
    "tomates"   =>  "2",
    "navets"    =>  "4",
    "carottes"  =>  "3",
    "oignons"   =>  "5"
];
// var_dump($legumes["carottes"]). "<hr>";
// echo "valeur du prix du 3ème légume : ". $legumes["carottes"]. "<hr>";

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
// var_dump($saison["été"]["navets"]["prix"]);


// // Ajouter un élément de liste à $user :
// $user[] = "42 rue des champs";
// // Ajouter un élément associatif "commandes" (qui contiendra un sous tableau) à $user :
// $user["commandes"][] = [
//     "patates",
//     "pommes"
// ];

// -Ajouter au tableau $saisons une nouvelle saison (par exemple "nouvelle saison")
// - À la nouvelle saison,  rajoutez un légume
// - Au nouveau légume, rajoutez une quantité et un prix
var_dump($saison);
$saison[] = "vivaldi";
var_dump($saison);

$saison["vivaldi"][] = "cerise";
var_dump($saison["vivaldi"]);

$saison["vivaldi"]["cerise"][] = ["quantité", "prix"];
var_dump($saison);
echo "<hr>";

// Rajoutez à un légume un champ "prix total", qui sera le résultat de sa quantité * son prix
$saison["hiver"]["oignons"][] = ["total"];
$saison["hiver"]["oignons"]["total"] = $saison["hiver"]["oignons"]["prix"] * $saison["hiver"]["oignons"]["qté"];
var_dump($saison["hiver"]);
echo "<hr>";



?>