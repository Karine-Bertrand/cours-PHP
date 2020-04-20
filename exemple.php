<?php

    echo "hello world!";

    // phpinfo();

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
    "navets" ,
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
$saison["hiver"]["oignons"]["total"] = $saison["hiver"]["oignons"]["prix"]* $saison["hiver"]["oignons"]["qté"];
var_dump($saison["hiver"]);
echo "<hr>";

?>



