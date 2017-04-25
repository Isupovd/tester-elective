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

    public function testValidateName()
    {
        $object = new ContactForm();
        $this->assertFalse($object->validateName());
        $object->name = 'Dima';
        $this->assertTrue($object->validateName());
    }

    public function testValidatePhone()
    {
        $object = new ContactForm();
        $this->assertFalse($object->validatePhone());
        $object->phone = '+79002040097';
        $this->assertTrue($object->validatePhone());
    }

    public function testValidateMessage()
    {
        $object = new ContactForm();
        $this->assertFalse($object->validateMessage());
        $object->message = 'Hello, my name is Dima';
        $this->assertTrue($object->validateMessage());
    }
}
