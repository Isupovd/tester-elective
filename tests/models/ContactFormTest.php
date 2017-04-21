<?php

namespace isupovd\testerelective\tests\models;

use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    public function testCreateObject()
    {
        $object = new ContactForm();
        $this->assertObjectHasAttribute('name', $object);
    }
}
