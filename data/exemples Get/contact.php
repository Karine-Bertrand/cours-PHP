<?php include('header.php') ?>
<?php include('navbar.php') ?>

<div class="container mt-3">
    <div class="row">
        <div class="col">

            <h1>Contactez-nous !</h1>

            <form action="traitement.php" method="POST" class="form">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input name="username" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <textarea name="message" class="form-control"></textarea>
                </div>

                <input type="submit" class="btn btn-primary">Envoyer le message</input>
                <button role="button" class="btn btn-primary" aria->Envoyer le message</button>
            </form>

        </div>
    </div>
</div>

<?php include('footer.php') ?>