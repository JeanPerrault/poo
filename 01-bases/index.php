<?php

include_once "Cat.php";

$bianca = new Cat();
$mina = new Cat();

// On peut affecter une valeur aux propriétés
$bianca->name = 'Bianca';
$bianca->type = 'Chat de gouttière';
$bianca->fur = 'blanc';
$mina->name = 'Mina';


// On peut afficher la valeur d'une propriété
echo 'Mon chat s\'appelle ' . $bianca->name . ' et il fait ' . 
        $bianca-> cry() .'. ';

echo 'Mon autre chat s\'appelle ' . $mina->name . ' et il fait ' . 
        $mina-> cry() . ' aussi.';

var_dump($bianca);
var_dump($mina);

// utilisation de THIS
echo $bianca->eat();
echo $mina->eat();