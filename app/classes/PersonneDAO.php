<?php

/**
 * Class PersonneDAO
 * Accesseur de la table annuaire
 */
class PersonneDAO
{
    protected $pdo;
    // Table SQL associée
    private static $table = 'annuaire';
    // Classe associée
    private static $class = 'Personne';

    public function __construct($pdo, $table)
    {
        $this->pdo = $pdo;
    }

    /**
     * Récupère une personne en base
     * @param $login : login de la personne
     * @return mixed
     */
    public function getOne($login)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM ? WHERE login=?');
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::$class);
        $stmt->execute(array(self::$table, $login));
        return $stmt->fetch();
    }

    /**
     * Récupère toutes les personnes dont le nom est conforme au motif
     * @param $nom : motif du nom
     * @return mixed
     */
    public function getAll($nom)
    {
        $stmt = $this->pdo->query('SELECT * FROM ' . self::$table . 'WHERE nom LIKE "' . $nom . '%" ');
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::$class);
    }

    /**
     * Met à jour une personne dans la base
     * @param $obj : Personne
     * @return mixed
     */
    public function update($obj)
    {
        $stmt = $this->pdo->prepare('UPDATE :t SET nom=:nom, prenom=:prenom, telephone=:telephone, bureau=:bureau, photo=:photo WHERE login=:login');
        $res = $stmt->execute(
            array(
                't' => self::$table,
                'nom' => $obj->nom,
                'prenom' => $obj->prenom,
                'telephone' => $obj->telephone,
                'bureau' => $obj->bureau,
                'photo' => $obj->photo,
                'login' => $obj->login
            )
        );

        return $res;
    }
}