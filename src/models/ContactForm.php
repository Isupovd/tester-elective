<?php

namespace isupovd\testerelective\models;

class ContactForm
{
    public $name;
    public $phone;
    public $message;
    public $filename;

    public function validate()
    {
        $result = false;

        if (!empty($this->name) && (!empty($this->phone)) && (!empty($this->message))) {
            $result = true;
        }
        return $result;
    }


    public function save($filename)
    {
        $result = false;

        if ($this->validate() && (!empty($filename))) {
            file_put_contents($filename, 'name = ' . $this->name . ', Phone = ' . $this->phone . ', Message = ' . $this->message . "\n", FILE_APPEND);
            $result = true;
        }
        return $result;
    }
}
