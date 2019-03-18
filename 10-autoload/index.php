<?php

// toutes nos classes vont etre chargées automatiquement quand elles sont appelées
// spl_autoload_register();
spl_autoload_register(function ($class) {
    // Pour Linux et macOS (Unix)
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require_once __DIR__.'/src/'.$class.'.php';
});

$cat = new Cat();
$dog = new Dog();
$fish = new Fish();

var_dump($cat);
var_dump($dog);
var_dump($fish);