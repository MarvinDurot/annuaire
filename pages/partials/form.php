<?php
// Création du formulaire
$form = new BootstrapForm($personne->getFields());
?>

<div class="row">
    <div class="col-md-8">
        <div class="pull-right">
            <img src="<?php echo $personne->getPhoto(); ?>" class="img-circle" width="150px">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <h2>Éditer la personne</h2>
        <form action="#" method="POST" role="form" enctype="multipart/form-data">
            <?php // Affichage du formulaire
                echo $form->hidden('login');
                echo $form->input('nom');
                echo $form->input('prenom');
                echo $form->input('telephone');
                echo $form->input('bureau');
                echo $form->input('commentaire');
                echo $form->upload('photo', 'Changer de photo :');
                echo $form->submit();
            ?>
        </form>
    </div>
</div>
