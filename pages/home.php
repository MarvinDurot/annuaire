<?php
// Accessible uniquement aux uitlisateurs connectés
if (!Auth::isLogged()) header('Location: index.php?p=login');

// Valeur par défaut pour la recherche par nom
$nom = isset($_GET['nom']) ? $_GET['nom'] : '';

// Récupération des personnes en fonction du nom
$personnes = $dao->getAll($nom);
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

    <script type='text/javascript' src='../public/js/functions.js'></script>

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Annuaire</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form action="#" method="GET" role="search" class="navbar-form navbar-left">
                <div class="form-group has-feedback">
                    <input type="text" placeholder="Recherche" class="form-control" name="nom"
                           value="<?php echo $nom; ?>" autofocus>
                    <i class="glyphicon glyphicon-search form-control-feedback"></i>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?p=logout">Se déconnecter</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="results" style="padding-top: 100px;">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Bureau</th>
                <th>Téléphone</th>
            </tr>
            </thead>
            <tbody>
            <?php
            // Si aucun résultats
            if (empty($personnes)) {
                echo '<tr><td colspan="4">Aucun résultat !</td></tr>';
            } else {
                // Parcours des personnes trouvées
                foreach ($personnes as $personne) {
                    // Affichage de la ligne correspondante
                    echo $personne->toTableRow();
                }
            }
            ?>
            </tbody>
        </table>

        <form action="../public/index.php" method="GET" id="form">
            <input type="hidden" name="p" value="contact"/>
            <input type="hidden" name="login" value="" id="login"/>
        </form>
    </div>

</div>

</body>
</html>
