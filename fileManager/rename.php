<?php
$dir = substr($_GET['dir'],0,-1);
$fileName = $_GET['fileName'];
$newName = $_GET['newName'];

rename($fileName, dirname($fileName).'/'.$newName);


$returnPath = dirname($_SERVER['PHP_SELF']).'/index.php?dir='.$dir;
header("location:$returnPath");