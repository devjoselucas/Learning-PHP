<?php

class Pessoa {
    function falar() {
        echo "Olá<br>";
    }
}

$matheus = new Pessoa();
$matheus->nome = "zé";

echo $matheus->nome;
echo '<br>';

$matheus->falar();

?>