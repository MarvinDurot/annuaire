<?php

class Card
{

    protected $data;
    public $surround = 'p';

    public function __construct($data)
    {
        $this->data = $data;
    }

    protected function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    protected function getValue($index)
    {
        return $this->data[$index];
    }

    public function field($name, $label = '')
    {
        return $this->surround("<label>$label</label> $this->getValue($name)");
    }

    public function thumbnail($url)
    {
        return '<img src="' . $url . '"></img>';
    }

    public function link($url, $label = '')
    {
        return '<a href="' . $url . '">' . $label . '</a>';
    }

}