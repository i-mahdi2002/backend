<?php
$mysql = new PDO("mysql:host=localhost;dbname=phonebook", "root", "");
$mysql->exec("set names utf8");
?>