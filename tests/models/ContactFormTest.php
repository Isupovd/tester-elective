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

    public function testValidate()
    {
        $object = new ContactForm();
        $object->name = 'Dima';
        $object->phone = '+79002040097';
        $object->message = 'hi';
        $this->assertTrue($object->validate());
    }
}
