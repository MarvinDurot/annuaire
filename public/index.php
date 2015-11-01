<?php
session_start();

// Chargement automatique des classes
function __autoload($class) {
    require_once "../app/classes/$class.php";
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

// Routage simple des pages
if (Auth::isLogged()) {
	if ($p === 'home') {
    	require('../pages/home.php');
	} else if ($p === 'contact') {
    	require('../pages/contact.php');
	} else if ($p === 'logout') {
    	Auth::logout();
    	require('../pages/login.php');
	}
} else {
	require('../pages/login.php');
}

?>
