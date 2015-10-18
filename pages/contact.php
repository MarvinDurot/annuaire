<?php
// Accessible uniquement aux uitlisateurs connectés
if (!Auth::isLogged()) header('Location: index.php?p=login');

// Test des paramètres GET
if (isset($_GET['login'])) {
    $personne = $dao->getOne($_GET['login']);
} else {
    header('Location: index.php');
    exit(0);
}

// Le formulaire de modification a été soumis
if (isset($_POST['submit'])) {

    if (isset($_FILES['photo'])) {
        if ($_FILES['photo']['error'] > 0) {
            $alert = new Alert(true, 'Erreur upload !');
        }

        $fname = 'img/' . $_POST['login'] . '.png';

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $fname)) {
            $_POST['photo'] = $fname;
        }
    }

    // Mise à jour des informations en base
    $personne->sync($_POST);
    $res = $dao->update($personne);

    // Création du message de feedback
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

    <div class="contact" style="padding-top: 100px;">
        <div class="row">
            <div class="col-md-6">
                <p><?php if (isset($alert)) echo $alert; ?></p>

                <?php
                if (Auth::getUser() === 'admin' || Auth::getUser() === $personne->login) {
                    $form = new BootstrapForm($personne->getFields());
                    echo '<legend>Editer la personne</legend>';
                    echo '<form action="#" method="POST" role="form" enctype="multipart/form-data">';
                    echo $form->hidden('login');
                    echo $form->input('nom');
                    echo $form->input('prenom');
                    echo $form->input('telephone');
                    echo $form->input('bureau');
                    echo $form->input('commentaire');
                    echo $form->upload('photo', 'Changer de photo :');
                    echo $form->submit();
                    echo '</form>';
                } else {
                    $card = new BootstrapCard($personne->getFields());
                    echo $card->thumbnail($personne->getPhoto());
                    echo $card->link($personne->getURL(), 'Intranet');
                    echo $card->link($personne->getMailTo(), 'Contacter');
                    echo '<legend>Informations</legend>';
                    echo $card->field('nom', 'Nom : ');
                    echo $card->field('prenom', 'Prénom : ');
                    echo $card->field('telephone', 'Téléphone : ');
                    echo $card->field('bureau', 'Bureau : ');
                    echo $card->field('commentaire', 'Commentaire : ');
                }
                ?>
            </div>
        </div>
    </div>

</div>

</body>
</html>
