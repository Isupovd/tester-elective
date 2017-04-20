<?php
//namespace Isupovd\tester-elective

require('../../src/models/ContactForm.php');

use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    public function testCreateObject()
    {
        $object = new ContactForm();
        echo 'PASSED';
    }
}
