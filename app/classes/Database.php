<?php

/**
 * Classe Database
 */
class Database
{
    static private $pdo = null; // Le singleton

    // Obenir le singleton
    static function getInstance()
    {
        if (self::$pdo == null) {
            $dsn = "mysql:host=localhost;dbname=annuaire;charset=utf8";
            self::$pdo = new PDO($dsn, "root", "root");
//            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$pdo;
    }
}