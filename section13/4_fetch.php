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

$sql = "SELECT * FROM carros";

$result = $conn->query($sql);

$conn->close();

$itens = $result->fetch_all();

print_r($itens);

?>