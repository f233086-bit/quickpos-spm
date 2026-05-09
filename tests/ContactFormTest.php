<?php
use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    public function testEmptyNameFails()
    {
        $name = "";
        $this->assertEmpty($name);
    }

    public function testInvalidEmailFails()
    {
        $email = "notanemail";
        $this->assertFalse(filter_var($email, FILTER_VALIDATE_EMAIL));
    }

    public function testValidEmailPasses()
    {
        $email = "user@example.com";
        $this->assertTrue((bool)filter_var($email, FILTER_VALIDATE_EMAIL));
    }

    public function testEmptyMessageFails()
    {
        $message = "";
        $this->assertEmpty($message);
    }

    public function testAllValidDataPasses()
    {
        $name = "Zara Asif";
        $email = "zara@example.com";
        $message = "Hello I want to know more.";
        $this->assertNotEmpty($name);
        $this->assertTrue((bool)filter_var($email, FILTER_VALIDATE_EMAIL));
        $this->assertNotEmpty($message);
    }
}