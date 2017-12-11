<?php

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    public function testIsFailing()
    {
        $this->assertFalse(true, 'LOL');
    }
}
