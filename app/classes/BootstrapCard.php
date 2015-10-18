<?php

class BootstrapCard extends Card
{

    protected function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    public function field($name, $label = '')
    {
        return $this->surround("<label>$label</label> " . $this->getValue($name));
    }

    public function thumbnail($url)
    {
        return '<img src="' . $url . '" class="img-circle pull-right" width="200px"></img>';
    }

    public function link($url, $label = '')
    {
        return $this->surround(
            '<a href="' . $url . '" class="btn btn-primary">' . $label . '</a>'
        );
    }

}