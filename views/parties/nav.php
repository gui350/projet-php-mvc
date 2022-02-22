<nav class="nav my-2 py-2 justify-content-center">
    <a class="nav-link" href="index.php?route=home">Acceuil</a>
    <a class="nav-link" href="index.php?route=liste-articles">Liste des articles</a>


    <?php if (!empty($_SESSION['identifiant']) && $_SESSION['identifiant'] == 'admin') : ?>
    <a class="nav-link" href="index.php?route=ajouter-articles">Ajouter un articles</a>
    <?php endif; ?>



    <?php if (empty($_SESSION['identifiant'])) : ?>
        <a class="nav-link" href="index.php?route=connexion">Connexion</a>
        
    <?php else : ?>
        <a class="nav-link" href="index.php?route=deconnexion">Déconnexion</a>
    <?php endif; ?>



</nav>