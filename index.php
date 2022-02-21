<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


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


    default:
        die('Erreur 404');
}
