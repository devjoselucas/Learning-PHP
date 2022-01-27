<?php

class Person {
    public $name;
    public $age;

    function isSaying() {
        echo $this->name . " has " . $this->age . " years old and is saying Hello.<br>"; 
    }
}

$firstPerson = new Person;

$firstPerson->name = "José";
$firstPerson->age  = 26;

$firstPerson->isSaying();

?>