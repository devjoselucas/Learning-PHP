<?php

function incrementa() {
    $numero = 0;
    $numero++;

    echo "$numero <br>";
}

incrementa();
incrementa();
incrementa();

function incrementaStatic() {
    static $numero = 0;
    $numero++;

    echo "$numero <br>";
}

incrementaStatic();
incrementaStatic();
incrementaStatic();


?>