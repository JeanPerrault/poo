<?php

class Database
{
    private static $pdo;

    public static function getInstance()
    {
        // On s'assure que la connexion à la BDD se fait une seule fois
        if (null === self::$pdo) { 
            self::$pdo = new PDO('mysql:host=127.0.0.1;dbname=videotheque;charset=utf8', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }

        return self::$pdo;
    }
}

$query = Database::getInstance()->query('SELECT * FROM movie');