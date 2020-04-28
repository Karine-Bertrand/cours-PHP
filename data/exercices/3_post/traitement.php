<?php

$name = $_POST['getname'];
$email = $_POST['getmail'];
$msg = $_POST['getmsg'];

?>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h1>Votre demande : </h1>
            <?php if($name === ""){?>
                <p><strong>Le champ nom est manquant</strong></p>
            <?php } ?>
            <?php if($email===""){?>
                <p><strong>Le mail n'est pas renseigné</strong></p>
            <?php } ?>
            <?php if($msg === ""){?>
                <p><strong>Le message est vide</strong></p>
            <?php } ?>
            <?php if(!empty($name) && !empty($email) && !empty($msg)){?>
            <li><strong>Expéditeur : </strong><?= $name ?></li>
            <li><strong>Adresse mail : </strong><?= $email ?></li>
            <p><strong>Message envoyé : </strong><?= $msg ?></p>
            <?php } ?>

        </div>
    </div>
</div>

