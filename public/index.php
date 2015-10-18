<?php
session_start();

// Chargement automatique des classes
function __autoload($class) {
    require_once "../app/class/$class.php";
}

// Initialisation des objets
$db = Database::getInstance();
$dao = new PersonneDAO($db);

// Récupération de la page
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}

// Routage des pages
if ($p === 'home') {
    require('../pages/home.php');
} else if ($p === 'login') {
    require('../pages/login.php');
} else if ($p === 'contact') {
    require('../pages/contact.php');
} else if ($p === 'logout') {
    Auth::logout();
    require('../pages/login.php');
}

?>
