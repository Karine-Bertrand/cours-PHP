<?php

$username = "root";
$password = "root";

$bdd = new PDO('mysql:host=localhost;dbname=wf3movies;charset=utf8;port=3306', $username, $password);/* connexion */
$request = "SELECT * FROM movies";/* appel requete */
$response = $bdd->query($request);/* résultat de la requete */
$movies = $response->fetchAll(PDO::FETCH_ASSOC);

// var_dump($response);
// var_dump($movies);
?>

<div class="container mt-3">
    <div class="row">
        <div class="col">

            <ul>
                <?php foreach ($movies as $movie) : ?>
                    <h1>#<?= $movie['id'] ?> : <a href="showMovie.php?id=<?= $movie['id'] ?>"><?= $movie['title'] ?></a></h1>
                    <p>
                        <strong>(<?= $movie['director'] ?>)</strong>  - Genre : <?= $movie['category'] ?>
                    </p>

                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>


