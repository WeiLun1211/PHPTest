<?php

namespace tests;

use Model\User;
use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    // public function testAddition()
    // {
    //     $result = 2 + 2;
    //     $this->assertEquals(4, $result);
    // }

    // public function testMinus()
    // {
    //     $result = 2 - 2;
    //     $this->assertEquals(0, $result);
    // }

    public function testAddUserSuccess()
    {
        $user = new User();

        $res = $user->addUser('Doe', 20);

        $this->assertEquals("Doe with age 20 is added", $res);
    }
    
    public function testAddUserFailed()
    {
        $user = new User();

        $res = $user->addUser('John', 18);

        $this->assertEquals(false, $res);
    }

    public function testShowUserList()
    {
        $user = new User();

        $res = $user->userList();

        $this->assertEquals(true, is_array($res));
    }

    public function testUpdateUserSuccess()
    {
        $user = new User();

        $res = $user->updateUser('John', 30);

        $this->assertEquals("John age is 30", $res);
    }

    public function testUpdateUserFailed()
    {
        $user = new User();

        $res = $user->updateUser('Doe', 33);

        $this->assertEquals(false, $res);
    }

    public function testRemoveUserSuccess()
    {
        $user = new User();

        $res = $user->removeUser('John');

        $this->assertEquals("John is removed", $res);
    }

    public function testRemoveUserFailed()
    {
        $user = new User();

        $res = $user->removeUser('Doe', 33);

        $this->assertEquals(false, $res);
    }
}
?>