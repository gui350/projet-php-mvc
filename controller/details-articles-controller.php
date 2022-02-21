<?php

if (empty($_GET['id'])) die ('Erreur 404');


include_once __DIR__. '/../models/Article.php';

$article = Article::retrieveByPK($_GET['id']);

if (empty($article)) die ('Erreur 408');

include __DIR__. '/../views/articles/details.php';