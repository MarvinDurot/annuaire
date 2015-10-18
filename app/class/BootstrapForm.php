<?php

class BootstrapForm extends Form
{

    protected function surround($html)
    {
        return '<div class="form-group">' . $html . '</div>';
    }

    public function input($name)
    {
        return $this->surround(
            '<input type="text" class="form-control" name="' . $name . '" value="' . $this->getValue($name) . '" required>'
        );
    }

    public function submit()
    {
        return $this->surround(
            '<button type="submit" class="btn btn-primary pull-right">Sauvegarder</button>'
        );
    }

}