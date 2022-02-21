<?php

include_once __DIR__. '/../models/Article.php';
$articles = Article::all(); 



include __DIR__. '/../views/articles/liste.php';