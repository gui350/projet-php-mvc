<?php

if (empty($_GET['id'])) die ('Erreur 404');

require_once __DIR__. '/../models/Article.php';
$article = Article::retrieveByPK($_GET['id']);

if (empty($article)) die ('Erreur 404');

if (!empty($_POST)) {
    
    if (
        !empty($_POST['auteur'])
        && !empty($_POST['image'])
        && !empty($_POST['titre'])
        && !empty($_POST['contenu'])
        && !empty($_POST['date_de_publication'])

        && filter_var($_POST['image'], FILTER_VALIDATE_URL) !== false
    
    ) {   

        $article->auteur = $_POST['auteur'];
        $article->image = $_POST['image'];
        $article->titre = $_POST['titre'];
        $article->contenu = $_POST['contenu'];
        $article->date_de_publication = $_POST['date_de_publication'];

        $article->save();

        redirection('liste-articles');
    } else $error = true;
}

include __DIR__. '/../views/articles/modifier.php';
