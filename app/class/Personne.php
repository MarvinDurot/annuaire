<?php

class Personne
{

    public function toTableRow()
    {
        echo '<tr onClick="soumettre(\'', $this->login, '\');"><td>', $this->nom, '</td><td>', $this->prenom, '</td><td>', $this->bureau, '</td><td>', $this->telephone, '</td></tr>';
    }

    public function getURL()
    {
        return 'http://intranet.iut-valence.fr/~' . $this->login;
    }

    public function getMailTo()
    {
        return 'mailto:' . $this->courriel;
    }

    public function getPhoto()
    {
        return empty($this->photo) ? 'img/default.png' : $this->photo;
    }

    public function getFields()
    {
        return get_object_vars($this);
    }

    public function sync($attributes) {
        foreach($this->getFields() as $key => $field) {
            if (isset($attributes[$key])) {
                $this->$key = $attributes[$key];
            }
        }
    }

}
