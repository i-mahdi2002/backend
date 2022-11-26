<?php

$host = 'localhost';
$dbname = 'login';
$username = 'root';
$password = '';

$db = new PDO("mysql:host=localhost;dbname=login","root","");
// if($db->errorCode()){
//     die('could not:'. $db->errorInfo());
// }
?>