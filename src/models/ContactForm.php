<?php

namespace isupovd\testerelective\models;

class ContactForm
{
    public $name;
    public $phone;
    public $message;

    public function validate()
    {
        $result = false;

        if (!empty($this->phone)&&(!empty($this->phone))&&(!empty($this->message))){
            $result = true;
        }
        return $result;
    }
}