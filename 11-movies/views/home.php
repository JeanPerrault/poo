<?php

require_once __DIR__ . '/header.php';

echo '<h1>Page d\'accueil</h1>';

/**
 * Récupérer les films en bases de données et les afficher sur la page sous forme de tableau HTML.
 */

// $db -> Database::getInstance()

$movieManager = new Manager\MovieManager();
$movies = $movieManager->findAll();

$actorManager = new Manager\ActorManager();
$actors = $ActorManager->findAll();

var_dump($movies);
var_dump($actors);


// $movies = Database::getInstance()->query('SELECT * FROM movie')->fetchAll();
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Synopsis</th>
            <th>Date de sortie</th>
            <th>Catégorie</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($movies as $movie) { ?>
            <tr>
                <td><?= $movie->id; ?></td>
                <td><?= $movie->title; ?></td>
                <td><?= $movie->getSynopsis(); ?></td>
                <td><?= $movie->getReleasedAt(); ?></td>
                <td><?= $movie->category; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Prenom, Nom</th>
            <th>Age</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($actors as $actor) { ?>
            <tr>
                <td><?= $actor->id; ?></td>
                <td><?= $actor->getFullname(); ?></td>
                <td><?= $actor->getAge(); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/footer.php';
