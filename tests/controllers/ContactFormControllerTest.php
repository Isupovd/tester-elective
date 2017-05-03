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
        $object->filename = 'tests/data/ContactFormController..log';
        $object->name = 'Dima';
        $object->phone = '+79002040000';
        $object->message = 'Hello';
        $this->assertTrue($object->actionContactForm());
        $this->assertFileEquals('tests/data/expectedContactFormController..log', 'tests/data/ContactFormController..log');
    }

    public function testInvalidActionContactForm()
    {
        $object = new ContactFormController();
        $object->filename = 'tests/data/ContactFormController..log';
        $object->phone = '+79002040000';
        $object->message = 'Hello';
        $this->assertFalse($object->actionContactForm());
        $this->assertFileEquals('tests/data/expectedContactFormController..log', 'tests/data/ContactFormController..log');
    }

}