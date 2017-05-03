<?php

namespace isupovd\testerelective\tests\controllers;
use isupovd\testerelective\controllers\ContactFormController;
use PHPUnit\Framework\TestCase;

class ContactFormControllerTest extends TestCase
{
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        unlink('tests/data/ContactFormController..log');
    }

    public function testActionContactForm()
    {
        $object = new ContactFormController();
        $filename = 'tests/data/ContactFormController..log';
        $name = 'Dima';
        $phone = '+79002040000';
        $message = 'Hello';
        $this->assertEquals('Данные сохранены', $object->actionContactForm($name, $phone, $message, $filename));
        $this->assertFileEquals('tests/data/expected/expectedContactFormController..log', 'tests/data/ContactFormController..log');
    }

    public function testInvalidActionContactForm()
    {
        $object = new ContactFormController();

        $filename = 'tests/data/ContactFormController..log';
        $name = null;
        $phone = null;
        $message = null;
        $this->assertEquals('Данные не сохранены, заполните все поля', $object->actionContactForm($filename, $name, $phone, $message));
        $this->assertFileEquals('tests/data/expected/expectedContactFormController..log', 'tests/data/ContactFormController..log');
        $name = 'Dima';
        $this->assertEquals('Данные не сохранены, заполните все поля', $object->actionContactForm($filename, $name, $phone, $message));
        $this->assertFileEquals('tests/data/expected/expectedContactFormController..log', 'tests/data/ContactFormController..log');
        $phone = '+79002040097';
        $this->assertEquals('Данные не сохранены, заполните все поля', $object->actionContactForm($filename, $name, $phone, $message));
        $this->assertFileEquals('tests/data/expected/expectedContactFormController..log', 'tests/data/ContactFormController..log');
    }
}