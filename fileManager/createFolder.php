<?php
$dir = substr($_GET['dir'],0,-1);
$newFolderName = $_GET['newFolderName'];
mkdir($dir.'/'.$newFolderName,0777);

$returnPath = dirname($_SERVER['PHP_SELF']).'/index.php?dir='.$dir;
header("location:$returnPath");
