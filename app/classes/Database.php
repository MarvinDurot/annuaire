<?php

/**
 * Class Database
 * Singleton de connexion à la base de données
 */
class Database
{
    static private $pdo = null; // Le singleton

    /**
     * Retourne l'objet PDO de la base
     * @return null|PDO
     */
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