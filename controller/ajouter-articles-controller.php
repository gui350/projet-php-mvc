<?php

if (empty($_SESSION['identifiant']) || $_SESSION['identifiant'] != 'admin') die ('Erreur 403');

include __DIR__. '/../views/articles/ajouter.php'; 