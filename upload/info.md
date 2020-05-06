méthode à suivre : 

dans le formulaire : 
    <form method="post" enctype="multipart/form-data>

dans le champ de saisie : 
    <input type="file" required>

dans le traitement de la methode post de récupération des data du formualire : voir fonctions.php
    1 - vérifier le fichier photo chargé : on vérifie l'extinction et le type
    2 - sauvegarder ce fichier : on déplace de upload à notre dossier de stockage (php met le fichier ouvert dans un dossier temp qui disparaît à la fin de l'exécution du script)
    3 - insérer dans la db : requête SQL