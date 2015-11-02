<?php

/**
 * Class Personne
 * Représentation d'une personne de l'annuaire
 */
class Personne
{
    /**
     * Retourne les information de l'utilisateur sous forme de ligne de tableau HTML
     */
    public function toTableRow()
    {
        return '<tr onClick="soumettre(\'' . $this->login . '\');"><td>' .
        $this->nom . '</td><td>' . $this->prenom . '</td><td>' .
        $this->bureau . '</td><td>' . $this->telephone . '</td></tr>';
    }

    /**
     * Crée et retourne l'adresse intranet de l'utilisateur
     * @return string : url
     */
    public function getURL()
    {
        return 'http://intranet.iut-valence.fr/~' . $this->login;
    }

    /**
     * Crée et retourne le lien mailto de l'utilisateur
     * @return string : url
     */
    public function getMailTo()
    {
        return 'mailto:' . $this->courriel;
    }

    /**
     * Retourne le lien vers la photo de l'utilisateur
     * @return string : url
     */
    public function getPhoto()
    {
        return empty($this->photo) ? 'img/default.png' : $this->photo;
    }

    /**
     * Retourne tous les champs de l'utilisateur
     * @return array : champs
     */
    public function getFields()
    {
        return get_object_vars($this);
    }

    /**
     * Met à jour les champs de l'utilisateur
     * @param $attributes : champs
     */
    public function update($attributes) 
    {
        foreach($this->getFields() as $key => $field) {
            if (isset($attributes[$key])) {
                $this->$key = $attributes[$key];
            }
        }
    }
}
