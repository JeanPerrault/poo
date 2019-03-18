<?php

require_once __DIR__ . '/../config/autoload.php';

$uri = $_SERVER['PATH_INFO'] ?? '/';

// On teste si on est sur la page d'accueil
if ($uri === '/') {
    require_once __DIR__ . '/../views/home.php';
}

/**
 * Ajouter la partie Acteur
 * 
 * Etape 1 : si la route est "/acteurs" on inclue un fichier "actors.php" dans "views/"
 * Etape 2 : Créer la classe Actor avec les bons attributs
 *           Ajouter une methode getFullname() qui renvoie le nom complet de l acteur
 *           Ajouter une methode getAge() qui renvoie l age de l acteur
 * Etape 3 : Ajouter des acteurs dans la BDD
 * Etape 4 : Créer la classe ActorManager avec la methode findAll() qui renvoie un tableau d'instance de Actor
 * 
 */