<?php

/**
 * Class Card
 * Construit une carte de visite simple
 */
class Card
{
    protected $data;
    public $surround = 'p';

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Entoure du html avec une balise
     * @param $html : code html
     * @return string : code html
     */
    protected function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * Retourne la valeur d'un champ en fonction de son index
     * @param $index : index du champ
     * @return mixed
     */
    protected function getValue($index)
    {
        return $this->data[$index];
    }

    /**
     * Retourne un champ
     * @param $name : nom du champ
     * @param string $label : libellé
     * @return string : code html
     */
    public function field($name, $label = '')
    {
        return $this->surround("<label>$label</label> $this->getValue($name)");
    }

    /**
     * Retourne un avatar
     * @param $url : url de l'avatar
     * @return string : code html
     */
    public function thumbnail($url)
    {
        return '<img src="' . $url . '"></img>';
    }

    /**
     * Retourne un lien
     * @param $url : url du lien
     * @param string $label : libellé
     * @return string : code html
     */
    public function link($url, $label = '')
    {
        return '<a href="' . $url . '">' . $label . '</a>';
    }
}