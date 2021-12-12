<?php

$hn = '127.0.0.1:3306';
    $db = 'elitetrade';
    $un = 'root';
    $pw = 'earthMusic';
$conn = new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die($conn->connect_error);

?>