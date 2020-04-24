<?php

include 'movies.php';

// On extrait la colonne de $movies dans laquelle on souhaite rechercher
$colonne = array_column($movies, 'id');
// On trouve la clé de la liste de films qui correspond (0, 1, 2...)
$keyCorrespondante = array_search($_GET['id'], $colonne);
// Maintenant qu'on a la clé, on récupère le film via sa clé dans le tableau $movies
$filmK = $movies[$keyCorrespondante];


?>

<!doctype html>
<html lang="fr">

<head>
    <title>Détail film</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col">

                <h1>Film#<?= $filmK['id'] . " " . $filmK['title'] ?></h1>
                <h2>Réalisateur : <?= $filmK['director'] ?></h2>
                <small>Catégorie : <?= $filmK['category'] ?></small>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>