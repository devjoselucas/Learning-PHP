<?php

class Car {
    public $portas;
    public $cor;

    function __construct($portas, $cor) {
        $this->portas = $portas;
        $this->cor    = $cor;
    }
}

$ferrari = new Car("2","Amarela");

echo $ferrari->portas . " " . $ferrari->cor;

?>