<?php

class Alert
{
    private $error;
    private $message;

    public function __construct($error, $message)
    {
        $this->error = $error;
        $this->message = $message;
    }

    public function __toString()
    {
        if ($this->error) {
            return '<div class="alert alert-danger text-center">
                        <span class="glyphicon glyphicon-remove">&nbsp;</span>'
                        . $this->message .
                    '</div>';
        } else {
            return '<div class="alert alert-success text-center">
                        <span class="glyphicon glyphicon-ok">&nbsp;</span>'
                        . $this->message .
                    '</div>';
        }
    }
}