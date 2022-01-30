<?php

$myhost = "localhost";
$myroot = "root";
$mypass = "";
$mybase = "cursoPHP";

$conn = new mysqli($myhost, $myroot, $mypass, $mybase);

$sql = "SELECT * FROM carros";

print_r($conn->query($sql));

$conn->close();

?>