<?php
include_once("core/database.php");
include_once("controller/phonebook-controller.php");

$controller = new phoneBook_controller();

$controller->display();

// $controller->$persons;
?>