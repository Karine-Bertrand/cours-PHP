<?php
include('moviesarray.php');
$colonneId = array_column($movies, 'id');
$keyTrouvee = array_search($_GET['id'], $colonneId);
$movie = $movies[$keyTrouvee];
?>

<?php include('header.php') ?>
<?php include('navbar.php') ?>

<div class="container mt-3">
    <div class="row">
        <div class="col">

            <a href="listmovies.php">
                < retour</a> <div class="card">
                    <div class="card-header">#<?= $movie['id'] ?> - <?= $movie['title'] ?></div>
                    <div class="card-body">
                        <p>
                            <strong>Catégorie</strong> : <?= $movie['category'] ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        Un film réalisé par <?= $movie['director'] ?>
                    </div>
        </div>
    </div>
</div>
</div>

<?php include('footer.php') ?>