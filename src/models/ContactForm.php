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

        if (!empty($this->phone) && (!empty($this->phone)) && (!empty($this->message))) {
            $result = true;
        }
        return $result;
    }


    public function save() : array
    {
        $filename = 'textfile.txt';

        if ($this->validate()) {
            file_put_contents($filename, $this->name);
        }
    }
}