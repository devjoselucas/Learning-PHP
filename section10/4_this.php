<?php

class Dog {
    public $name;

    function hasName($name) {
        $this->name = $name;
    }
}

$chorrin = new Dog;

$chorrin->hasName("chorrin");

echo $chorrin->name;

?>