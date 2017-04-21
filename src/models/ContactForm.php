<?php

namespace isupovd\testerelective\models;

class ContactForm
{
    public $name;
    public $phone;
    public $message;

    public function validate()
    {
        if (empty($this->name and $this->phone and $this->message)){
            return false;
        } else {
            return true;
        }
    }
}