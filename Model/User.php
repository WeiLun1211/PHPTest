<?php

namespace Model;

class User {

    public $users = [ 'John' => 18 ];
    
    public function addUser(string $name, int $age)
    {
        if(isset($this->users[$name])) return false;

        $this->users[$name] = $age;

        return "$name with age $age is added";
    }

    public function userList()
    {
        return $this->users;
    }

    public function updateUser(string $name, int $age)
    {
        if(!isset($this->users[$name])) return false;

        $this->users[$name] = $age;

        return "$name age is $age";
    }

    public function removeUser(string $name)
    {
        if(!isset($this->users[$name])) return false;

        unset($this->users[$name]);

        return "$name is removed";
    }
}



?>