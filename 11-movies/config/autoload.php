<?php

spl_autoload_register(function ($class){
    // Fix bug on macOS or linux
    $class = str_replace('\\', DIRECTORY_SEPARATOR,$class);

    require __DIR__ . '/../src/'.$class.'.php';
});