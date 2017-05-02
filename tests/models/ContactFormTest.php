<?php
namespace isupovd\testerelective\tests\models;

use isupovd\testerelective\models\ContactForm;
use PHPUnit\Framework\TestCase;



class ContactFormTest extends TestCase
{
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        unlink('tests/data/textfile.txt');
    }

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
        $this->assertFalse($object->validate());
        $object->phone = "+79002040097";
        $object->name = 'Dima';
        $object->message = 'Hello World';
        $this->assertTrue($object->validate());
    }

    public function testInvalidValidate()
    {
        $object = new ContactForm();
        $object->phone = "+79000000000";
        $this->assertFalse($object->validate());
        $object->name = 'Vladimir';
        $this->assertFalse($object->validate());
    }

    public function testSave()
    {
        $object = new ContactForm();
        $this->assertFalse($object->save());
        $object->name = 'Vladimir';
        $object->phone = "+79000000000";
        $object->message = 'Hello';
        $this->assertTrue($object->save());
        $this->assertFileEquals('tests/data/expectedtextfile.txt', 'tests/data/textfile.txt');
    }

    public function testInvalidSave()
    {
        $object = new ContactForm();
        $object->name = 'Vladimir';
        $this->assertFalse($object->save());
        $this->assertFileEquals('tests/data/expectedtextfile.txt', 'tests/data/textfile.txt');
        $object->phone = '+79002050058';
        $this->assertFalse($object->save());
        $this->assertFileEquals('tests/data/expectedtextfile.txt', 'tests/data/textfile.txt');
    }
}
