<?php
namespace isupovd\testerelective\controllers;
use isupovd\testerelective\models\ContactForm;

class ContactFormController
{
    public function actionContactForm($name, $phone, $message, $filename)
    {
        $model = new ContactForm();

        $model->name = $name;
        $model->phone = $phone;
        $model->message = $message;

        if ($model->save($filename)){
            $result = 'Данные сохранены';
        } else {
            $result = 'Данные не сохранены, заполните все поля';
        }
        return $result;
    }
}
