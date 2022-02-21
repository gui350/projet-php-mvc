<?php include __DIR__ . '/../parties/header.php'; ?>

<h1><?= $article->titre ?></h1>

<div class="row">
    <div class="col-4">
        <img src="<?= $article->image ?>" alt="" class="img-fluid thumbnail">
    </div>

    <div class="col-8">
        <dl>
            <dt>Auteur</dt>
            <d><?= $article->contenu ?></dd>

            <dt>Titre</dt>
            <dd><?= $article->auteur ?></dd>
            
            <dt>Date de publication</dt>
            <dd><?= $article->date_de_publication ?></dd>
        </dl>

    </div>
</div>




<?php include __DIR__ . '/../parties/footer.php';
