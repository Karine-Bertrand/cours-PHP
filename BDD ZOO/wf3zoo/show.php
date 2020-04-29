<?php

$id = $_GET['id'];
$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', "root", "root");
$request = "SELECT * FROM animal WHERE id=" . $id;
$response = $bdd->query($request);
$animal = $response->fetch(PDO::FETCH_ASSOC);

function ecrireGenre($sexe){
    $genre = "";
    if ($sexe == "0") {
        $genre = "mâle";
    } elseif ($sexe == "1") {
        $genre = "femelle";
    } else {
        $genre = "non déterminé";
    }
    return $genre;
}
function accordGenre($sexe){
    $accord = "";
    if ($sexe == "0") {
        $accord = "né";
    } elseif ($sexe == "1") {
        $accord = "née";
    } else {
        $accord = "né(e)";
    }
    return $accord;
}

$nom = $animal['nom'];
$sexe = ecrireGenre($animal['sexe']);
$dateNais = date("j-m-Y", strtotime($animal['date_naissance']));
$pays = $animal['pays_origine'];
$espece = $animal['espece'];
$poids = $animal['poids'];
$taille = $animal['taille'];
$accord = accordGenre($animal['sexe']);


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>WF3 Zoo</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <?php include('partials/navbar.php') ?>

    <main role="main">

        <!-- <?php include('partials/jumbotron.php') ?> -->

        <div class="container mt-3">
            <div class="row">
                <div class="col">

                    <div class="card">

                        <div class="card-header">
                            <h2><?= $nom ?></h2>
                            <h4><?= $espece ?></h4>
                        </div>
                        <div class="card-body">
                            <ul><strong>Identité :</strong>
                                <li><?= $accord . " : " . $dateNais ?></li>
                                <li>Sexe : <?= $sexe ?></li>
                            </ul>
                            <ul><strong>Santé :</strong>
                                <li>Poids : <?= $poids ?> kg</li>
                                <li>Taille : <?= $taille ?> cm</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <strong>Pays d'origine : </strong><?= $pays ?>
                        </div>

                        <img src="#" class="card-img-bottom" alt="pas d'image pour l'instant">

                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include('partials/footer.php') ?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>