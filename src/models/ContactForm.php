<?php

namespace isupovd\testerelective\models;

class ContactForm
{
    public $name;
    public $phone;
    public $message;

    public function validateName()
    {
        $result = true;

        if (empty($this->name)){
            $result = false;
        }
        return $result;
    }

    public function validatePhone()
    {
        $result = true;

        if (empty($this->phone)){
            $result = false;
        }
        return $result;
    }

    public function validateMessage()
    {
        $result = true;

        if (empty($this->message)){
            $result = false;
        }
        return $result;
    }
}