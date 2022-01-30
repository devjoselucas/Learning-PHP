<?php

$myhost = "localhost";
$myroot = "root";
$mypass = "";
$mybase = "cursoPHP";

$conn = new mysqli($myhost, $myroot, $mypass, $mybase);

if($conn->connect_errno) {
    echo "Erro de conexão com o BD! <br>";
    echo "Erro:" . mysqli_connect_error();
}


?>