<?php
namespace isupovd\testerelective\tests\models;

use isupovd\testerelective\models\ContactForm;
use PHPUnit\Framework\TestCase;



class ContactFormTest extends TestCase
{
    public function testCreateObject()
    {
        $object = new ContactForm();
        $this->assertObjectHasAttribute('name', $object);
        $this->assertObjectHasAttribute('phone', $object);
        $this->assertObjectHasAttribute('message', $object);
    }

    public function testEmptyValidateName()
    {
        $object = new ContactForm();
        $object->name = 'Dima';
        $this->assertTrue($object->validateName());
    }

    public function testEmptyValidatePhone()
    {
        $object = new ContactForm();
        $object->phone = '+79002040097';
        $this->assertTrue($object->validatePhone());
    }

    public function testEmptyValidateMessage()
    {
        $object = new ContactForm();
        $object->message = 'Hello, my name is Dima';
        $this->assertTrue($object->validateMessage());
    }
}
