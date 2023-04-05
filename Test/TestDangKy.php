<?php
    use PHPUnit\Framework\TestCase;

class RegistrationTest extends TestCase
{
    private $registration;

    protected function setUp(): void
    {
        $this->registration = new Registration();
    }

    public function testRegistrationSuccess(): void
    {
        $this->assertTrue($this->registration->registerUser('@example.com', 'password', 'Thinh'));
    }

    public function testRegistrationFailure(): void
    {
        $this->assertFalse($this->registration->registerUser('@example.com', 'password', ''));
    }
}
