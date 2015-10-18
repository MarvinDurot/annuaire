<?php
if (isset($_POST['login']) && isset($_POST['password'])) {
        $res = Auth::login($_POST['login'], $_POST['password']);

        if ($res) {
            header('Location: index.php');
            exit(0);
        } else {
            $alert = new Alert(1, 'Le login ou le mot de passe n\'est pas correct.');
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

    <title>Connexion</title>

    <!-- Custom styles for this template -->
    <link href="../public/css/signin.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container">

    <form action="#" method="POST" class="form-signin">
        <h2 class="form-signin-heading">Connexion</h2>
        <label for="login" class="sr-only">Login</label>
        <input type="text" name="login" class="form-control" placeholder="Login" required autofocus>
        <label for="password" class="sr-only">Mot de passe</label>
        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
    </form>
    <p><?php if (isset($alert)) echo $alert; ?></p>

</div>

</body>
</html>

