<?php

$bdd = new PDO('mysql:host=localhost;dbname=wf3movies;charset=utf8;port=3306', "root", "root");/* connexion */
$request = "SELECT * FROM movies";/* appel requete */
$response = $bdd->query($request);/* résultat de la requete */
$movies = $response->fetchAll(PDO::FETCH_ASSOC);
$listId = array_column($movies, 'id');
$cle = array_search($_GET['id'], $listId);


?>


<div class="container mt-3">
    <div class="row">
        <div class="col">

            <a href="listmovies.php"></a>

            <div class="card">

                <div class="card-header">
                    <h1>#<?= $movies[$cle]['id'] ?> - <?= $movies[$cle]['title'] ?></h1></div>
                <div class="card-body">
                    <p><strong>Catégorie</strong> : <?= $movies[$cle]['category'] ?></p>
                </div>
                <div class="card-footer">
                    Un film réalisé par <?= $movies[$cle]['director'] ?>
                </div>

            </div>
        </div>
    </div>
</div>