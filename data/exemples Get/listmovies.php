<?php include('moviesarray.php'); ?>
<?php include('header.php') ?>
<?php include('navbar.php') ?>

<div class="container mt-3">
    <div class="row">
        <div class="col">

            <ul>
                <?php foreach ($movies as $movie) : ?>
                    <li>
                        <strong>#<?= $movie['id'] ?> : <a href="movie.php?id=<?= $movie['id'] ?>"><?= $movie['title'] ?></a></strong> (<?= $movie['director'] ?>) - Genre : <?= $movie['category'] ?>
                    </li>

                <?php endforeach ?>
            </ul>

        </div>
    </div>
</div>

<?php include('footer.php') ?>