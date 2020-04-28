<?php if (empty($_POST['fullname'])) : ?>
    <p>
        <strong>Il manque le champ "fullname" !</strong>
    </p>
<?php endif; ?>

<?php if (empty($_POST['email'])) : ?>
    <p>
        <strong>Il manque le champ "email" !</strong>
    </p>
<?php endif; ?>

<?php if (empty($_POST['message'])) : ?>
    <p>
        <strong>Il manque le champ "message" !</strong>
    </p>
<?php endif; ?>


<?php if (
    !empty($_POST['fullname']) &&
    !empty($_POST['email']) &&
    !empty($_POST['message'])
) : ?>

    <ul>
        <li>
            <strong>Expéditeur :</strong> <?= $_POST['fullname'] ?>
        </li>

        <li>
            <strong>Adresse e-mail :</strong> <?= $_POST['email'] ?></li>

    </ul>

    <p><strong>Message :</strong> <?= $_POST['message'] ?></p>

<?php endif; ?>