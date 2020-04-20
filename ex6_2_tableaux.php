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


?>