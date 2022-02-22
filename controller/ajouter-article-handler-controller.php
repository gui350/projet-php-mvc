<?php

if (empty($_SESSION['identifiant']) || $_SESSION['identifiant'] != 'admin') die ('Erreur 403');

if (
    !empty($_POST['auteur'])
    && !empty($_POST['image'])
    && !empty($_POST['titre'])
    && !empty($_POST['contenu'])
    && !empty($_POST['date_de_publication'])

    && filter_var($_POST['image'], FILTER_VALIDATE_URL) !== false
) {

    include __DIR__. '/../models/Article.php';
    
    $article = new Article;
    $article->auteur = $_POST['auteur'];
    $article->image = $_POST['image'];
    $article->titre = $_POST['titre'];
    $article->contenu = $_POST['contenu'];
    $article->date_de_publication = $_POST['date_de_publication'];

    $article->save();

    redirection('liste-articles');


} else redirection('ajouter-articles');