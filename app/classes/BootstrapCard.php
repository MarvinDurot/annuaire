<?php

/**
 * Class BootstrapCard
 * Construit une carte de visite Bootstrap
 */
class BootstrapCard extends Card
{
    /**
     * Retourne un champ
     * @param $name : nom du champ
     * @param string $label : libellé
     * @return string : code html
     */
    public function field($name, $label = '')
    {
        return $this->surround("<label>$label</label> " . $this->getValue($name));
    }

    /**
     * Retourne un avatar
     * @param $url : url de l'avatar
     * @return string : code html
     */
    public function thumbnail($url)
    {
        return '<img src="' . $url . '" class="img-circle pull-right" width="200px"></img>';
    }

    /**
     * Retourne un lien
     * @param $url : url du lien
     * @param string $label : libellé
     * @return string : code html
     */
    public function link($url, $label = '')
    {
        return $this->surround(
            '<a href="' . $url . '" class="btn btn-primary">' . $label . '</a>'
        );
    }

}