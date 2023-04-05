<?php

    use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testLogin()
    {
        $username = 'myUsername';
        $password = 'myPassword';
        $result = login($username, $password);
        $this->assertIsBool($result);
        $this->assertTrue($result);
    }
}
?>