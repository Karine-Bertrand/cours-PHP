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

        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <h1>Nouvel arrivant au zoo</h1>
                    <form action="create.php" method="post" class="form">

                        <div class="form-group">
                            <label for="formName">Nom de l'animal</label>
                            <input name="nom" id="formName" type="text" class="form-control">
                            <label for="formEspece">Espèce</label>
                            <input name="espece" id="formEspece" type="text" class="form-control">
                            <label for="formDateNais">Date de naissance</label>
                            <input name="date_naissance" id="formDateNais" type="date" class="form-control">
                            <label for="formPays">Pays d'origine</label>
                            <input name="pays_origine" id="formPays" type="text" class="form-control">
                            <label for="formSexe">Sexe</label>
                            <select name="sexe" id="formSexe" class="form-control">
                                <option value="0">mâle</option>
                                <option value="1">femelle</option>
                                <option value="2">non déterminé</option>
                            </select>
                            <label for="formPoids">Poids (en kg)</label>
                            <input name="poids" id="formPoids" type="text" class="form-control">
                            <label for="formTaille">Taille (en cm)</label>
                            <input name="taille" id="formTaille" type="text" class="form-control">
                        </div>

                        <input class="btn btn-primary" type="submit" value="Valider">

                    </form>
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