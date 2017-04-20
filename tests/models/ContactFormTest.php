<?php
//namespace Isupovd\tester-elective\tests\models''

//require('../../models/ContactForm.php');

use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    public function CreateObjectTest()
    {
        $object = new ContactForm();
        echo 'PASSED';
    }
}
