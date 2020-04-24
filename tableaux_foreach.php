<?php
// $nombresPairs = [2, 4, 6, 8];
// var_dump($nombresPairs);
// foreach($nombresPairs as $nombre) {
// echo $nombre;
// echo "<br>";
// }
// foreach ($nombresPairs as $i => $nombre) {
// echo $i . ": " . $nombre;
// echo "<br>";
// }
// $user = [
// "firstname" => "john",
// "lastname" => "doe",
// "age" => "54",
// "job" => "developpeur"
// ];
// echo "
// <hr>";
// echo "<ul>";
//     foreach($user as $carac => $valeur) {
//     echo "<li><strong>" . $carac . "</strong> : " . $valeur . "</li>";
//     }
//     echo "</ul>";



// 1 - Faire une liste ul>li avec les éléments suivants :
$saisons1 = ["été", "automne", "printemps", "hiver"];
echo "<ul>";
    foreach ($saisons1 as $nom) {
    echo "<li>" . $nom . "</li>";
    };
    echo "</ul>";
    echo "<hr>";

// 2 - Faire une liste ul>li avec les éléments suivants (afficher "clé: valeur")
$aubergines = [
    "quantité" => 12,
    "prix" => 5
];
echo "<ul>";
foreach ($aubergines as $clé => $valeur) {
    echo "<li><strong>" . $clé . "</strong> : " . $valeur . "</li>";
};
echo "</ul>";
echo "<hr>";




// Faire une liste ul>li qui affiche aubergines et tomates
// Faire un autre ul>li (à l'intérieur du premier) qui affiche quantité et prix pour  aubergines et tomates
$ete = [
    "aubergines" => [
        "quantité" => 12,
        "prix" => 5
    ],
    "tomates" => [
        "quantité" => 10,
        "prix" => 6
    ],
];
echo "<ul>";
foreach ($ete as $legume => $caracteristiques) {
    echo "<li>" . $legume . "</li>";
        echo "<ul>";
            foreach ($caracteristiques as $cle_legume => $valeur){
                echo "<li><strong>" . $cle_legume . " : </strong>" . $valeur . "</li>";
            }
        echo "</ul>";
}
echo "</ul>";
echo "<hr>";





// Afficher la liste des saisons, puis des légumes de chaque saison, puis des caractéristiques de chaque légume
// dans plusieurs ul>li successifs
$saisons = [
    "été" => [
        "aubergines" => [
            "quantité" => 10,
            "prix" => 2
        ],
        "tomates" => [
            "quantité" => 15,
            "prix" => 3
        ]
    ],
    "automne" => [
        "pommes de terre" => [
            "quantité" => 20,
            "prix" => 2.5
        ],
        "carottes" => [
            "quantité" => 25,
            "prix" => 3.5
        ]
    ],
    "hiver" => [
        "avocats" => [
            "quantité" => 30,
            "prix" => 4
        ],
        "pêches" => [
            "quantité" => 35,
            "prix" => 4.5
        ]
    ]
];

echo "<ul>";
foreach ($saisons as $element => $saison) {
    echo "<li><strong>" . $element . "</strong></li>";// var_dump($element);
    echo "<ul>";
    foreach ($saison as $cle_legume => $legume) {
        // var_dump($cle1);
        echo "<li>" . $cle_legume . " : " . "</li>";
        echo "<ul>";
        foreach ($legume as $cle_valeur => $valeur) {
            echo "<li>" . $cle_valeur . " : " . $valeur . "</li>";
            // var_dump($clé);
        }
        echo "</ul>";
    }
    echo "</ul>";
}
echo "</ul>";
echo "<hr>";





?>
