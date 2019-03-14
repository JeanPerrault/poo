<?php
include_once "Car.php";
/**
 * 
 * une voiture possède 4 roues, une couleur, une marque et un modèle (4 attributs)
 * une voiture peut rouler, klaxonner (2 methodes)
 */

 $car = new Car('Citroen', 'DS3');
 $car->setColor('rouge');

 echo $car->drive();?><br><?php //affiche "la Citroen DS3 roule sur ses 4 roues."
 echo $car->klaxon(); // affiche "la voiture rouge klaxonne."