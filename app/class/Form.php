<?php

class Form
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

    public function input($name)
    {
        return $this->surround(
            '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">'
        );
    }

    public function hidden($name)
    {
        return '<input type="hidden" name="' . $name . '" value="' . $this->getValue($name) . '">';
    }

    public function submit()
    {
        return '<button type="submit">Sauvegarder</button>';
    }

}