<?php
namespace isupovd\testerelective\controllers;
use isupovd\testerelective\models\ContactForm;

class ContactFormController extends ContactForm
{
    public function actionContactForm()
    {
        $result = false;
        if ($this->validate()){
            $this->save();
            $result = true;
        }
        return $result;
    }

}