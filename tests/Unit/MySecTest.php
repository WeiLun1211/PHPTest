<?php

namespace tests;

use PHPUnit\Framework\TestCase;

class MySecTest extends TestCase
{
    public function testMultiplication()
    {
        $result = 2 * 2;
        $this->assertEquals(4, $result);
    }

    public function testDivide()
    {
        $result = 2 - 2;
        $this->assertEquals(4, $result);
    }
}
?>