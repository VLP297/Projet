<?php

use PHPUnit\Framework\TestCase;

class directoryTest extends TestCase
{
    public function testFailure()
    {
        $this->assertDirectoryIsReadable('..\aloeprevention');
    }
}
?>