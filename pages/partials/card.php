<div class="row">
    <div class="col-md-8">
        <div class="pull-right">
            <img src="<?php echo $personne->getPhoto(); ?>" class="img-circle" width="150px">
        </div>
        <div class="pull-left">
            <p><a href="<?php echo $personne->getURL(); ?>" class="btn btn-primary">Intranet</a></p>
            <p><a href="<?php echo $personne->getMailTo(); ?>" class="btn btn-primary">Contacter</a></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <h2>Informations</h2>
        <dl>
            <dt>Nom</dt>
            <dd><?php echo $personne->nom; ?></dd>
            <dt>Prénom</dt>
            <dd><?php echo $personne->prenom; ?></dd>
            <dt>Téléphone</dt>
            <dd><?php echo $personne->telephone; ?></dd>
            <dt>Bureau</dt>
            <dd><?php echo $personne->bureau; ?></dd>
            <dt>Commentaire</dt>
            <dd><?php echo $personne->commentaire; ?></dd>
        </dl>
    </div>
</div>
