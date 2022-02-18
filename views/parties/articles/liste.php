<?php include __DIR__ . '/../header.php'; ?>

<h1>Les articles</h1>

<div class="row">
    <?php foreach ($articles as $article) { ?>
        <div class="card col-4">
            <img class="card-img-top" src="<?= $article->image ?>" alt="">
            <div class="card-body">
                <p class="card-text"><?= $article->titre ?></p>
                <p class="card-text"><?= $article->contenu ?></p>
                <p class="card-text"><?= $article->auteur ?></p>
                <p class="card-text"><?= $article->date_de_publication ?></p>
            </div>
        </div>
    <?php } ?>
</div>


<?php include __DIR__ . '/../footer.php';
