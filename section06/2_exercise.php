<?php

$numero = 0;

while($numero <= 30) {
    
    echo $numero . "<br>";

    if($numero === 24) {
        echo $numero;
        break;
    }

    $numero += 2;
}

?>