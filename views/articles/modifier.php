<?php include __DIR__ . '/../parties/header.php'; ?>

<h1>Modifier un article</h1>

<form method="post">
    
    <div class="form-group row">
        <label for="nom" class="col-sm-12 col-form-label">Auteur</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="auteur" id="auteur" placeholder="auteur" value="<?= $article->auteur ?>" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="nom" class="col-sm-12 col-form-label">Image</label>
        <div class="col-sm-12">
            <input type="url" class="form-control" name="image" id="image" placeholder="image" value="<?= $article->image ?>" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="nom" class="col-sm-12 col-form-label">Titre</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="titre" id="titre" placeholder="titre" value="<?= $article->titre ?>" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="nom" class="col-sm-12 col-form-label">Contenu</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="contenu" id="contenu" placeholder="contenu" value="<?= $article->contenu ?>" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="nom" class="col-sm-12 col-form-label">Date de publication</label>
        <div class="col-sm-12">
            <input type="date" class="form-control" name="date_de_publication" id="date_de_publication" placeholder="date_de_publication" value="<?= $article->date_de_publication ?>" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </div>

</form>

<?php include __DIR__ . '/../parties/footer.php'; ?>