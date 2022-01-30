<?php

$myhost = "localhost";
$myroot = "root";
$mypass = "";
$mybase = "cursoPHP";

$conn = new mysqli($myhost, $myroot, $mypass, $mybase);

/*

$sql = "CREATE TABLE teste (
    nome VARCHAR(10),
    sobrenome VARCHAR(10)
)";

*/

$sql = "DROP TABLE teste";

$conn->query($sql);

$conn->close();

?>