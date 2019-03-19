<?php

require_once __DIR__ . '/header.php'; ?>

<h1>Ajouter un acteur dans un film</h1>

<form method="post">

    <select name="movie" id="movie"action=<?php ?>></select>
    <select name="actor" id="actor"></select>
    <button class="btn btn-primary btn-block">Ajouter</button>

</form>

<?php 

/**
 * Etape 1 : recuperer tous les films en BDD et generer les options du select#move avec la bonne value
 * Etape 2 : faire la meme chose avec les acteurs
 * Etape 3 : on selectionne un film, on selectionne un acteur, on execute le formulaire et a ce moment là on ajoute le lien
 * entre l'id du film selectionné et l'id de l'acteur selectionné dans la table movie_has_actor
 */


require_once __DIR__ . '/footer.php';