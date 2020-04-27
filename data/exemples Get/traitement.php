<?php include('header.php') ?>
<?php include('navbar.php') ?>

<div class="container mt-3">
    <div class="row">
        <div class="col">

            <h1>Résumé de votre message :</h1>

            <p>
                Envoyé par : <?= $_POST['username'] ?> (<?= $_POST['email'] ?>)
            </p>
            <p>
                <?= $_POST['message'] ?>
            </p>

        </div>
    </div>
</div>

<?php include('footer.php') ?>