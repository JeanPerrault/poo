<?php

require_once __DIR__ . '/header.php';

/**
 * Ajouter un film
 */

// On instancie un objet Movie
$movie = new Entity\Movie();
// On remplit l'objet avec les données de la requête POST
$movie->hydrate($_POST);

// On vérifie si les données sont valides
if ($movie->isValid()) {
    $movieManager = new Manager\MovieManager();
    // On ajoute les données en base de données
    $movieManager->add($movie);
    // redirection
    // envoyer un mail
    // afficher un message
    echo '<div class="alert alert-success">Film ajouté.</div>';
}

?>

<form method="post" action="">
    <div class="form-group">
        <label for="titre">Titre :</label>
        <input type="text" name="titre" id="titre" class="form-control">
    </div>
    <div class="form-group">
        <label for="synopsis">Synopsis :</label>
        <textarea class="form-control" name="synopsis" id="synopsis"></textarea>
    </div>
    <div class="form-group">
        <label for="realesed_at">Date du Film :</label>
        <input type="date" name="realesed_at" id="realesed_at" class="form-control">
    </div>
    <div class="form-group">
        <label for="category">Catégorie :</label>
        <input type="text" name="category" id="category" class="form-control">
    </div>
    <button class="btn btn-primary btn-block">Ajouter</button>
</form>

<?php require_once __DIR__ . '/footer.php';