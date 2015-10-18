<?php

class PersonneDAO
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getOne($login)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM annuaire WHERE login=?');
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Personne');
        $stmt->execute(array($login));
        return $stmt->fetch();
    }

    public function getAll($nom)
    {
        $stmt = $this->pdo->query('SELECT * FROM annuaire WHERE nom LIKE "' . $nom . '%" ');
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Personne');
    }

    // Mise à jour de l'objet dans la base
    public function update($obj)
    {
        $stmt = $this->pdo->prepare('UPDATE annuaire SET nom=:nom, prenom=:prenom, telephone=:telephone, bureau=:bureau WHERE login=:login');
        $res = $stmt->execute(
            array(
                'nom' => $obj->nom,
                'prenom' => $obj->prenom,
                'telephone' => $obj->telephone,
                'bureau' => $obj->bureau,
                'login' => $obj->login
            )
        );

        return $res;
    }
}