<?php

namespace isupovd\testerelective\models;

class ContactForm
{
    public $name;
    public $phone;
    public $message;
    public $filename = 'src/data/textfile.txt';

    public function validate()
    {
        $result = false;

        if (!empty($this->name) && (!empty($this->phone)) && (!empty($this->message))) {
            $result = true;
        }
        return $result;
    }


    public function save()
    {
        $filename = $this->filename;
        $result = false;

        if ($this->validate()) {
            file_put_contents($filename, $this->name . $this->phone . $this->message . "\n", FILE_APPEND);
            $result = true;
        }
        return $result;
    }
}