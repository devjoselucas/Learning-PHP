<?php

class Dog {
    public $raca;
    public $cor;

    function __construct($raca, $cor) {
        $this->raca = $raca;
        $this->cor    = $cor;
    }
}

$ferrari = new Dog("Salsicha","Black and Tan");

echo $ferrari->raca . " " . $ferrari->cor;

?>