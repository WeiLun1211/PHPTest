<?php

namespace tests;

use PHPUnit\Framework\TestSuite;

class MyTestSuite
{
    public static function suite()
    {
        $suite = new TestSuite('MyTest Test Suite');
        $suite->addTestSuite(MyTestSuite::class);
        // Add more test classes or suites here
        return $suite;
    }
}

?>