<?php

// Test des paramètres GET
if (isset($_GET['login'])) {
    $personne = $dao->getOne($_GET['login']);
} else {
    header('Location: index.php');
    exit(0);
}

// Le formulaire de modification a été soumis
if (isset($_POST['submit'])) {

    // Si fichier transmis
    if (isset($_FILES['photo'])) {
        // On vérifie qu'il n'y a pas eu d'erreur
        if ($_FILES['photo']['error'] == 0) {
            // Génération du nom du fichier
            $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
            // Vérification de l'extension
            if (in_array($ext, ['png', 'jpg', 'gif'])) {
                // Génération du nom
                $fname = 'img/' . $_POST['login'] . '.' . $ext;
                // On déplace le fichier dans le dossier des images
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $fname)) {
                    // Si tout s'est bien passé on met à jour le lien
                    $_POST['photo'] = $fname;
                }
            }
        }
    }

    // Mise à jour des informations en base
    $personne->update($_POST);
    $res = $dao->save($personne);

    // Création du message de feedback selon le résultat précédent
    if ($res) {
        $alert = new Alert(false, 'Les informations de la personne a bien été modifiées !');
    } else {
        $alert = new Alert(true, 'Oups... Il semblerait qu\'il y ait eu un problème.');
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Annuaire">
    <meta name="author" content="Marvin DUROT">

    <title>Annuaire</title>

    <!-- Custom styles for this template -->
    <link href="../public/css/contact.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Annuaire</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?p=logout">Se déconnecter</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="contact">
        <div class="row">
            <div class="col-md-8">
                <p><?php if (isset($alert)) echo $alert; ?></p>
            </div>
        </div>
        <?php
            // Si admin connecté ou utilisateur du profil connecté
            if (Auth::getUser() === 'admin' || Auth::getUser() === $personne->login) {
                require('partials/form.php');
            } else {
                require('partials/card.php');
            }
        ?>
    </div>
</div>

</body>
</html>
