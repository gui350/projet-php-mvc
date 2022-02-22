<?php

if (empty($_SESSION['identifiant']) || $_SESSION['identifiant'] != 'admin') die('Erreur 403');

if (empty($_GET['id'])) die('Erreur 404');

include __DIR__. '/../models/Article.php';

$article = Article:: retrieveByPK($_GET['id']);

if (empty($article)) die ('Erreur 404'); 

$article->delete();

redirection('liste-articles');