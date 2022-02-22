<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();


include 'fonction.php';
include 'models/SimpleOrm.php';

$conn = new mysqli('localhost', 'root', 'root');

if ($conn->connect_error)
    die(sprintf('Unable to connect toi the database. %s', $conn->connect_error));

SimpleOrm::useConnection($conn, 'projet_php');


if (!empty($_GET['route'])) $route = $_GET['route'];
else $route = 'home';

switch ($route) {
    case 'home':
        include __DIR__ . '/controller/home-controller.php';
        break;

    case 'liste-articles':
        include __DIR__ . '/controller/liste-articles-controller.php';
        break;

    case 'details-article':
        include __DIR__ . '/controller/details-articles-controller.php';
        break;

    case 'ajouter-articles':
        include __DIR__ . '/controller/ajouter-articles-controller.php';
        break;

    case 'ajouter-article-handler':
        include __DIR__ . '/controller/ajouter-article-handler-controller.php';
        break;

    case 'modifier-article':
        include __DIR__ . '/controller/modifier-article-controller.php';
        break;

    case 'supprimer-article':
        include __DIR__ . '/controller/supprimer-article-controller.php';
        break;

    case 'connexion':
        include __DIR__ . '/controller/authentication/connexion-controller.php';
        break;

    case 'connexion-handler':
        include __DIR__ . '/controller/authentication/connexion-handler-controller.php';
        break;

    case 'deconnexion':
        include __DIR__ . '/controller/authentication/deconnexion-controller.php';
        break; 




    default:
        die('Erreur 404');
}
