<?php

use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    public function testFailure()
    {
        $this->assertDirectoryIsReadable('\vendor');
    }
}
?>